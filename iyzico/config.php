<?php

require_once('IyzipayBootstrap.php');

IyzipayBootstrap::init();

class Config
{
    public static function options()
    {
        $options = new \Iyzipay\Options();
        $options->setApiKey("setApiKey_enter");
        $options->setSecretKey("setSecretKey_enter");
        $options->setBaseUrl("https://api.iyzipay.com");
        return $options;
    }
}