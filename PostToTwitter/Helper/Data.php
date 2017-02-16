<?php
class Dhimant_PostToTwitter_Helper_Data extends Mage_Core_Helper_Abstract {

	const OAUTH_ACCESS_TOKEN = 'simplesettings/general/oauth_access_token';
    const OAUTH_ACCESS_TOKEN_SECRET = 'simplesettings/general/oauth_access_token_secret';
    const CONSUMER_KEY = 'simplesettings/general/consumer_key';
    const CONSUMER_SECRET = 'simplesettings/general/consumer_secret';

    public function getOAuthAcessToken($store = null) {
        return Mage::getStoreConfig(self::OAUTH_ACCESS_TOKEN, $store);
    }

    public function getOAuthAcessTokenSecret($store = null) {
        return Mage::getStoreConfig(self::OAUTH_ACCESS_TOKEN_SECRET, $store);
    }

    public function getConsumerKey($store = null) {
        return Mage::getStoreConfig(self::CONSUMER_KEY, $store);
    }

    public function getConsumerSecret($store = null) {
        return Mage::getStoreConfig(self::CONSUMER_SECRET, $store);
    }

 
}
?>