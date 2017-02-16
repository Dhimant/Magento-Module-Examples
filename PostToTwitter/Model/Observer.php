<?php
include(dirname(__FILE__)."/../vendor/autoload.php");

class Dhimant_PostToTwitter_Model_Observer
{
    public function postTweet(Varien_Event_Observer $observer)
    {
        $product = $observer->getEvent()->getProduct();
        $name = $product->getName();
        $sku = $product->getSku();
        
        $oauth_access_token = Mage::helper('dhimant_posttotwitter')->getOAuthAcessToken();
        $oauth_access_token_secret = Mage::helper('dhimant_posttotwitter')->getOAuthAcessTokenSecret();
	    $consumer_key = Mage::helper('dhimant_posttotwitter')->getConsumerKey();
        $consumer_secret = Mage::helper('dhimant_posttotwitter')->getConsumerSecret();

        $settings = array(
  		  'oauth_access_token' => $oauth_access_token,
    	  'oauth_access_token_secret' => $oauth_access_token_secret,
		  'consumer_key' => $consumer_key,
		  'consumer_secret' => $consumer_secret
		);

		$url = "https://api.twitter.com/1.1/statuses/update.json";
		$requestMethod = 'POST';

		$postfields = array(
    		'status' => $name." ".$sku." updated", 
		);

		$twitter = new TwitterAPIExchange($settings);
		
		$twitter->buildOauth($url, $requestMethod)
		    ->setPostfields($postfields)
		    ->performRequest();



        /*Mage::log("{$name} ({$sku}) updated.", null, 'product-updates.log');
        Mage::log("oauth_access_token : {$oauth_access_token} ", null, 'product-updates.log');
	    Mage::log("oauth_access_token_secret : {$oauth_access_token_secret} ", null, 'product-updates.log');
        Mage::log("consumer_key : {$consumer_key} ", null, 'product-updates.log');
        Mage::log("consumer_secret : {$consumer_secret} ", null, 'product-updates.log');*/

    }
}



/* 

Twitter Post Plugin. 

Create a plugin which will post link to a twitter whenever there is a price update of the product. 

Settings of the plugin. 

  	'oauth_access_token' => "YOUR_OAUTH_ACCESS_TOKEN",
    'oauth_access_token_secret' => "YOUR_OAUTH_ACCESS_TOKEN_SECRET",
    'consumer_key' => "YOUR_CONSUMER_KEY",
    'consumer_secret' => "YOUR_CONSUMER_SECRET"

*/


?>

