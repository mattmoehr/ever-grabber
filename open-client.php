<?php
require 'vendor/autoload.php';

//set this to false to use in production
$sandbox = true;

$oauth_handler = new \Evernote\Auth\OauthHandler($sandbox);

$key      = 'mattmoehr-3839';
$secret   = 'd398f2dc569d5e02';
$callback = 'https://ever-grabber-mattmoehr.c9users.io/open-client.php';

$oauth_data  = $oauth_handler->authorize($key, $secret, $callback);

echo "\nOauth Token : " . $oauth_data['oauth_token'];