<?php

/**
 * BIGFISH_PAYMENTGATEWAY_STORE_NAME
 * Merchant's unique identifier used in Payment Gateway.
 */
//define('BIGFISH_PAYMENTGATEWAY_STORE_NAME', 'o3_optika');    
/**
 * BIGFISH_PAYMENTGATEWAY_API_KEY
 * Keep it safe, do not share with anyone!
 */
//define('BIGFISH_PAYMENTGATEWAY_API_KEY', 'fce4b-3f8c9-fffc1-c3983-64520');
// Régi API_KEY: fce4b-3f8c9-fffc1-c3983-64520


// MasterPass Lencsék.hu
//if( isset($_POST['ujfizmod']) and $_POST['ujfizmod']=='OTPayMP' ) {
//    define('BIGFISH_PAYMENTGATEWAY_STORE_NAME', 'lencsek');
//    define('BIGFISH_PAYMENTGATEWAY_API_KEY', '5257e-ce581-43fc1-32aff-52aa6');
    //define('BIGFISH_PAYMENTGATEWAY_TEST_MODE', true);
//    define('BIGFISH_PAYMENTGATEWAY_TEST_MODE', false);
//} else {
    define('BIGFISH_PAYMENTGATEWAY_STORE_NAME', 'o3_optika');    
    define('BIGFISH_PAYMENTGATEWAY_API_KEY', 'fce4b-3f8c9-fffc1-c3983-64520');
    define('BIGFISH_PAYMENTGATEWAY_TEST_MODE', false);
//}

/**
 * BIGFISH_PAYMENTGATEWAY_TEST_MODE
 * Please change this to false in your production environment.
 */
//define('BIGFISH_PAYMENTGATEWAY_TEST_MODE', false);

/**
 * BIGFISH_PAYMENTGATEWAY_OUT_CHARSET
 * Payment Gateway sends all messages in UTF-8 character encoding.
 * If your system uses a different character encoding, this parameter should be changed.
 * (e.g. ISO-8859-2)
 */
define('BIGFISH_PAYMENTGATEWAY_OUT_CHARSET', 'UTF-8');

/**
 * BIGFISH_PAYMENTGATEWAY_USE_API
 * Possible values:
 * - "SOAP": RPC SOAP API
 * - "REST": HTTP REST API
 * - "LEGACY": HTTP GET parameters
 */
define('BIGFISH_PAYMENTGATEWAY_USE_API', 'REST');

/**
 * BIGFISH_PAYMENTGATEWAY_OTP_PUBLIC_KEY
 * It is used with OTP two party payment to encrypt sensitive data.
 * Each merchant has unique private and public keys.
 */
define('BIGFISH_PAYMENTGATEWAY_OTP_PUBLIC_KEY', '02201935');
