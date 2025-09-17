<?php

/*******************************************************************************
 * Árukereső.hu trusted shop program
 * Example code integration to the webshop
 * 
 *
 * Please note, that the example detailed below can not be simply copy-pasted
 * into your webshop’s code, it has to be customized adequately.
 *
 * Setup steps:
 * 1. Copy TrustedShop.php file to a place accessible by the webshop engine.
 * 2. Copy this example code to the page of the webshop where the e-mail address
 *    of the customer and the names of the purchased products are retrievable
 *    from the webshop engine. Generally this is the webshop’s confirmation
 *    page of the purchase.
 * 3. Customize the pasted example code according to the following:
 *    - Modify path of TrustedShop.php in require_once() in such a way that
 *      the webshop engine can use it.
 *    - Check that the proper WebAPI key is set, if not, modify it. You can find
 *      the WebAPI key on the partner portal.
 *    - Set the customer’s e-mail address.
 *    - Add the names of the purchased products.
 *    - Implement an error handling if you want (optional).
 *
 ******************************************************************************/

require_once 'includes/TrustedShop.php';

try {
  
  // Provide your own WebAPI key.
  // You can find your WebAPI key on your partner portal.
  
  $Client = new TrustedShop('9a24a16dac8c1c0773b7073d3946d681');
  
  // Provide the e-mail address of your customer.
  // You can retrieve the e-amil address from the webshop engine.
  
  $Client->SetEmail('somebody@example.com');

  // Provide the name of the purchased products.
  // You can get the name of the products from the webshop engine.
  // The AddProduct method must be called for each of the purchased products.
  // 
  // It is optional to provide the name of the products, so if this data is not
  // available, you can leave out the AddProduct calls.
  
  $Client->AddProduct('Name of first purchased product');
  $Client->AddProduct('Name of second purchased product');

  // This method sends us the e-mail address and the name of the purchased
  // products set above. After the data arrived to us, we store them
  // with the time stamp and the WebAPI key.
  // This lets us know that someone has purchased at your webshop, to whom
  // we later have to send the questionnaire for evaluating your shop.
  
  $Client->Send();
  
} catch (Exception $Ex) {
  
  // Here you can implement error handling. The error message can be obtained
  // in the manner shown below. Implementing error handling is optional.
  
  $ErrorMessage = $Ex->getMessage();
}

?>