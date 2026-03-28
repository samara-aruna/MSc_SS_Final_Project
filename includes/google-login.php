<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/.env.php';

$provider = new League\OAuth2\Client\Provider\Google([
    'clientId'     => GOOGLE_CLIENT_ID,
    'clientSecret' => GOOGLE_CLIENT_SECRET,
    'redirectUri'  => GOOGLE_REDIRECT_URI,
]);

$authUrl = $provider->getAuthorizationUrl([
    'scope' => ['openid', 'profile', 'email']
]);

$_SESSION['oauth2state'] = $provider->getState();
session_start();

header('Location: ' . $authUrl);
exit();
?>