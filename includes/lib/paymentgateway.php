<?php

/**
 * BIG FISH Payment Gateway client for PHP5
 * 
 * @package     PaymentGateway_Client
 * @copyright   Copyright (c) 2009-2011 BIG FISH Internet-Technology Ltd. All Rights Reserved.
 * @link        https://www.paymentgateway.hu/technikai_informaciok.html
 * @version     2.0
 */
require_once(dirname(__FILE__) . '/config.php');

/**
 * Implements communication with the BIG FISH Payment Gateway System
 */
class PaymentGateway {

    public static $gatewayUrlProduction = "https://www.paymentgateway.hu";
    public static $gatewayUrlTest = "https://test.paymentgateway.hu";
    
    /**
     * Transaction initialization
     * 
     * @param PaymentGateway_Init_Request $request Init request object
     * @return PaymentGateway_Response Payment Gateway response object
     */
    public static function init(PaymentGateway_Init_Request $request) {

        return self::sendRequest("Init", $request);
    }

    /**
     * Start payment process, redirects the user to Payment Gateway
     * 
     * @param PaymentGateway_Start_Request $request Start request object
     */
    public static function start(PaymentGateway_Start_Request $request) {

        $url = self::getUrl() . "/Start?" . $request->getParams();
        header("Location: " . $url);
        exit;
    }

    /**
     * Query transaction results from Payment Gateway
     * 
     * @param PaymentGateway_Result_Request $request Result request object
     * @return PaymentGateway_Response Payment Gateway response object
     */
    public static function result(PaymentGateway_Result_Request $request) {

        return self::sendRequest("Result", $request);
    }

    /**
     * Close a previously started transaction
     * 
     * @param PaymentGateway_Close_Request $request Close request object
     * @return PaymentGateway_Response Payment Gateway response object
     */
    public static function close(PaymentGateway_Close_Request $request) {

        return self::sendRequest("Close", $request);
    }

    /**
     * Refund a transaction
     * 
     * @param PaymentGateway_Refund_Request $request Refund request object
     * @return PaymentGateway_Response Payment Gateway response object
     */
    public static function refund(PaymentGateway_Refund_Request $request) {

        return self::sendRequest("Refund", $request);
    }

    private static function sendRequest($method, PaymentGateway_Request $request) {
        
        if (BIGFISH_PAYMENTGATEWAY_USE_API == "SOAP") {
            $wsdl = self::getUrl() . "/api/soap/?wsdl";

            if (!class_exists('SoapClient')) {
                throw new PaymentGateway_Exception("Error! The SOAP PHP module is not loaded!");
            }

            try {
                $client = new SoapClient($wsdl, array(
                            'soap_version' => SOAP_1_2,
                            'cache_wsdl' => WSDL_CACHE_BOTH,
                            'exceptions' => true,
                            'trace' => true,
                            'login' => BIGFISH_PAYMENTGATEWAY_STORE_NAME,
                            'password' => BIGFISH_PAYMENTGATEWAY_API_KEY,
                            'user_agent' => 'BIG FISH Payment Gateway SOAP Client v2.0 ( ' . $method . ' - ' . $_SERVER["HTTP_HOST"] . ' )',
                        ));

                $request->encodeValues();

                if ($method == 'Init') {
                    $request->setExtra();
                }

                $response = $client->__call($method, array(array('request' => $request)));
                $response = $response->{$method . 'Result'};

                $response = new PaymentGateway_Response(self::ucfirstProps($response));

                return $response;
            } catch (SoapFault $e) {
                throw new PaymentGateway_Exception($e->getMessage());
            }
        } else {
            
            if (BIGFISH_PAYMENTGATEWAY_USE_API == "REST") {
                $url = self::getUrl() . '/api/rest/';

                $request->encodeValues();

                if ($method == 'Init') {
                    $request->setExtra();
                }
            } else {
                $request->ResponseMode = "JSON";
                $url = self::getUrl() . "/" . $method . "?" . $request->getParams();
            }

            if (!function_exists('curl_init')) {
                throw new PaymentGateway_Exception("Error! The CURL PHP module is not loaded!");
            }

            $authHeader = 'Authorization: Basic ' .
                    base64_encode(BIGFISH_PAYMENTGATEWAY_STORE_NAME . ':' . BIGFISH_PAYMENTGATEWAY_API_KEY);

            $s = curl_init();
            curl_setopt($s, CURLOPT_URL, $url);
            curl_setopt($s, CURLOPT_HTTPHEADER, array($authHeader));
            curl_setopt($s, CURLOPT_TIMEOUT, 30);
            curl_setopt($s, CURLOPT_MAXREDIRS, 4);
            curl_setopt($s, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($s, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($s, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($s, CURLOPT_REFERER, $_SERVER["HTTP_HOST"]);
            
            $request = self::ucfirstProps($request);
            
            if (BIGFISH_PAYMENTGATEWAY_USE_API == "REST") {
                $postData = array(
                    'method' => $method,
                    //'responseFormat' => 'XML',
                    'json' => json_encode(get_object_vars($request)),
                );

                curl_setopt($s, CURLOPT_POST, true);
                curl_setopt($s, CURLOPT_POSTFIELDS, $postData);
                curl_setopt($s, CURLOPT_USERAGENT, 'BIG FISH Payment Gateway Rest Client v2.0 ( ' . $method . ' - ' . $_SERVER["HTTP_HOST"] . ' )');
            } else {
                curl_setopt($s, CURLOPT_USERAGENT, "BIG FISH Payment Gateway Client v2.0 (" . $_SERVER["HTTP_HOST"] . ")");
            }

            $httpResponse = curl_exec($s);

            if ($httpResponse === false) {
                $e = new PaymentGateway_Exception(curl_error($s), curl_errno($s));
                curl_close($s);
                throw $e;
            }
            
            curl_close($s);

            $response = new PaymentGateway_Response($httpResponse);

	    return $response;
        }
    }

    public static function getUrl() {

        if (BIGFISH_PAYMENTGATEWAY_TEST_MODE === true) {
            return self::$gatewayUrlTest;
        } else {
            return self::$gatewayUrlProduction;
        }
    }

    /**
     * Uppercase object properties
     * 
     * @param object $object
     * @return void 
     * @access private
     */
    public static function ucfirstProps($object) {

        foreach (get_object_vars($object) as $key => $value) {
            unset($object->{$key});
            $object->{ucfirst($key)} = $value;
        }
        return $object;
    }

}

/**
 * Base class for all request classes
 */
class PaymentGateway_Request {

    /**
     * Construct query string from object properties
     * 
     * @return string Constructed query string
     */
    public function getParams() {
        foreach ($this as $name => $value) {
            if (!empty($value)) {
                $params[] = ucfirst($name) . "=" . $this->encodeValue($value);
            }
        }
        return implode("&", $params);
    }

    protected function encodeValue($value) {
        $value = trim($value);

        if (
                BIGFISH_PAYMENTGATEWAY_USE_API != "SOAP" &&
                BIGFISH_PAYMENTGATEWAY_USE_API != "REST"
        ) {
            if (preg_match("/\s+/", $value)) {
                $value = urlencode($value);
            }
        }
        return $value;
    }

    public function encodeValues() {
        foreach (get_object_vars($this) as $key => $value) {
            $this->{$key} = $this->encodeValue($value);
        }
    }

}

/**
 * Payment Gateway Init request class
 */
class PaymentGateway_Init_Request extends PaymentGateway_Request {

    public $storeName;
    public $providerName;
    public $responseUrl;
    public $amount;
    public $orderId;
    public $userId;
    public $currency;
    public $language;
    public $mppPhoneNumber;
    public $otpCardNumber;
    public $otpExpiration;
    public $otpCvc;
    public $otpCardPocketId;
    public $autoCommit = true;
    public $extra;

    /**
     * Construct new Init request instance
     */
    public function __construct() {
        $this->storeName = BIGFISH_PAYMENTGATEWAY_STORE_NAME;
    }

    /**
     * Set the identifier of the selected payment provider
     * 
     * @param string $providerName Identifier of the selected payment provider
     * @return PaymentGateway_Init_Request 
     */
    public function setProviderName($providerName) {
        $this->providerName = $providerName;
        return $this;
    }

    /**
     * Set the URL where Users will be sent back after payment
     * 
     * @param string $responseUrl Response URL
     * (e.g. http://www.yourdomain.com/response.php, 
     * http://www.yourdomain.com/response.php?someparam=somevalue etc.)
     * @return PaymentGateway_Init_Request 
     */
    public function setResponseUrl($responseUrl) {
        $this->responseUrl = $responseUrl;

        if (
                BIGFISH_PAYMENTGATEWAY_USE_API != "SOAP" &&
                BIGFISH_PAYMENTGATEWAY_USE_API != "REST"
        ) {
            $urldecodedResponseUrl = urldecode($this->responseUrl);
            if ($this->responseUrl == $urldecodedResponseUrl) {
                $this->responseUrl = urlencode($this->responseUrl);
            }
        }
        return $this;
    }

    /**
     * Set payment transaction amount
     * 
     * @param float $amount Transaction amount
     * @return PaymentGateway_Init_Request 
     */
    public function setAmount($amount) {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Set the identifier of the order in your system
     * 
     * @param mixed $orderId Order identifier
     * @return PaymentGateway_Init_Request 
     */
    public function setOrderId($orderId) {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * Set the identifier of the user in your system
     * 
     * @param mixed $userId User identifier
     * @return PaymentGateway_Init_Request 
     */
    public function setUserId($userId) {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Set payment transaction currency
     * 
     * @param string $currency Three-letter ISO currency code (e.g. HUF, USD etc.)
     * @return PaymentGateway_Init_Request 
     */
    public function setCurrency($currency) {
        $this->currency = ($currency ? $currency : 'HUF');
        return $this;
    }

    /**
     * Set the language
     * 
     * @param string $language Language (e.g. HU, EN, DE etc.)
     * @return PaymentGateway_Init_Request 
     */
    public function setLanguage($language) {
        $this->language = ($language ? $language : 'HU');
        return $this;
    }

    /**
     * Set the Mobile Payment or MasterCard Mobile identifier
     * Works with MPP and MPP2 providers
     * 
     * @param string $mppPhoneNumber Mobile Payment identifier (e.g. 123456789)
     * or phone number of the user (e.g. 36301234567)
     * @return PaymentGateway_Init_Request 
     */
    public function setMppPhoneNumber($mppPhoneNumber) {
        $this->mppPhoneNumber = $mppPhoneNumber;
        return $this;
    }

    /**
     * Set the card number of the user
     * Works with OTP2 provider
     * 
     * @param string $otpCardNumber Card number 
     * (e.g. 1111222233334444 or 1111 2222 3333 4444)
     * @return PaymentGateway_Init_Request 
     */
    public function setOtpCardNumber($otpCardNumber) {
        $this->otpCardNumber = $otpCardNumber;
        return $this;
    }

    /**
     * Set the card expiration date
     * Works with OTP2 provider
     * 
     * @param string $otpExpiration Expiration date - mm/yy (e.g. 0512 or 05/12)
     * @return PaymentGateway_Init_Request 
     */
    public function setOtpExpiration($otpExpiration) {
        $this->otpExpiration = $otpExpiration;
        return $this;
    }

    /**
     * Set the card verification code
     * Works with OTP2 provider
     * 
     * @param string $otpCvc Verification code (e.g. 123)
     * @return PaymentGateway_Init_Request 
     */
    public function setOtpCvc($otpCvc) {
        $this->otpCvc = $otpCvc;
        return $this;
    }

    /**
     * Set the Pocket Id of the user
     * Works with OTP provider
     *
     * @param string $otpCardPocketId Pocket Id
     * (e.g. 03)
     * @return PaymentGateway_Init_Request
     */
    public function setOtpCardPocketId($otpCardPocketId) {
        $this->otpCardPocketId = $otpCardPocketId;
        return $this;
    }

    /**
     * If true verifies the availability of funds and captures funds in one step.
     * If false verifies the availability of funds and reserves them for later capture.
     * 
     * Works with OTP and OTP2 providers
     * 
     * @param boolean $autoCommit true or false
     * @return PaymentGateway_Init_Request 
     */
    public function setAutoCommit($autoCommit = true) {
        $this->autoCommit = (($autoCommit === true || $autoCommit == "true") ? "true" : "false");
        return $this;
    }

    public function setExtra() {
        if ($this->providerName == "OTP2" && !empty($this->otpCardNumber) &&
                !empty($this->otpExpiration) && !empty($this->otpCvc)) {

            if (!function_exists('openssl_public_encrypt')) {
                throw new PaymentGateway_Exception("Error! The OpenSSL PHP module is not loaded!");
            }

            $extra = "|" . $this->otpCardNumber . "|" . $this->otpExpiration . "|" . $this->otpCvc . "|";
            openssl_public_encrypt($extra, $encrypted, BIGFISH_PAYMENTGATEWAY_OTP_PUBLIC_KEY);
            $this->extra = $this->urlsafe_b64encode($encrypted);
        }

	if (!($this->providerName == "OTP" && !empty($this->otpCardPocketId))) {
	    unset($this->otpCardPocketId);
	}

        unset($this->otpCardNumber);
        unset($this->otpExpiration);
        unset($this->otpCvc);
    }

    public function getParams() {
        $this->setExtra();

        return parent::getParams();
    }

    private function urlsafe_b64encode($string) {
        $data = base64_encode($string);
        $data = str_replace(array('+', '/', '='), array('-', '_', '.'), $data);
        return $data;
    }

}

/**
 * Payment Gateway Start request class
 */
class PaymentGateway_Start_Request extends PaymentGateway_Request {

    public $transactionId;

    /**
     * Construct new Start request instance
     * 
     * @param string $transactionId Transaction ID received from Payment Gateway
     */
    public function __construct($transactionId) {
        $this->transactionId = $transactionId;
    }

    public function getParams() {
        unset($this->responseMode);
        return parent::getParams();
    }

}

/**
 * Payment Gateway Result request class
 */
class PaymentGateway_Result_Request extends PaymentGateway_Request {

    public $transactionId;

    /**
     * Construct new Result request instance
     * 
     * @param string $transactionId Transaction ID received from Payment Gateway
     */
    public function __construct($transactionId) {
        $this->transactionId = $transactionId;
    }

}

/**
 * Payment Gateway Close request class
 */
class PaymentGateway_Close_Request extends PaymentGateway_Request {

    public $transactionId;
    public $approved;

    /**
     * Construct new Start request instance
     * 
     * @param string $transactionId Transaction ID received from Payment Gateway
     * @param boolean $approved Approve or decline transaction (true/false)
     */
    public function __construct($transactionId, $approved = true) {
        $this->transactionId = $transactionId;
        $this->approved = (($approved === true || $approved == "true") ? "true" : "false");
    }

}

/**
 * Payment Gateway Refund request class
 */
class PaymentGateway_Refund_Request extends PaymentGateway_Request {

    public $transactionId;
    public $amount;

    /**
     * Construct new Refund request instance
     * 
     * @param string $transactionId Transaction ID received from Payment Gateway
     * @param float $amount Amount to refund
     */
    public function __construct($transactionId, $amount) {
        $this->transactionId = $transactionId;
        $this->amount = (float) $amount;
    }

}

/**
 * Payment Gateway response class
 */
class PaymentGateway_Response {

    /**
     * Construct new response object from JSON encoded object
     * 
     * @param string $json JSON encoded object
     */
    public function __construct($json) {
        if (is_object($json)) {
            $object = $json;
        } else {
            $object = json_decode($json);
        }

        if (is_object($object)) {
            foreach (get_object_vars($object) as $name => $value) {
                if (!empty($value)) {
                    if (BIGFISH_PAYMENTGATEWAY_OUT_CHARSET != "UTF-8") {
                        $value = iconv("UTF-8", BIGFISH_PAYMENTGATEWAY_OUT_CHARSET, $value);
                    }
                    $name = ucfirst($name);
                    $this->$name = $value;
                }
            }
        }
    }

}

class PaymentGateway_Exception extends Exception {
    
}
