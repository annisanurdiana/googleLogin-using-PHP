<?php
 
//Include Google Client Library for PHP autoload file
require_once 'google_api/vendor/autoload.php';
 
//Make object of Google API Client for call Google API
$google_client = new Google_Client();
 
//Set the OAuth 2.0 Client ID
$google_client->setClientId('713997560355-ls9mbh80t8204qphc2dlafql9l7oj02t.apps.googleusercontent.com');
 
//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');
 
//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/php_fundamental/Google_Login/dashboard.php');
 
//
$google_client->addScope('email');
 
$google_client->addScope('profile');
 
//start session on web page
session_start();
 
?>