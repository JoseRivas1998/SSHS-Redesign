<?php

$root = $_SERVER["DOCUMENT_ROOT"];

// include($root . "/inc/dbConnect.php");

set_include_path(get_include_path() . PATH_SEPARATOR . $root . '/inc/google-api-php-client-2.0.0-RC4/google-api-php-client-2.0.0-RC4/src');

require_once realpath(dirname(__FILE__) . '/../src/Google/autoload.php');

$client_id = '885948454-p41hcpf6hbuci1rdb57m6ehk1m6n96ar.apps.googleusercontent.com';
$client_secret = '<YOUR_CLIENT_SECRET>';
$redirect_uri = 'addClub.php';

$client = new Google_Client();
$client->setClientId($client_id);
// $client->setClientSecret($client_secret);
$client->setRedirectUri($redirect_uri);
$client->setScopes('email');

$output;

$output = "<div class='alert alert-success'>Club Added!</div>";

echo $output;

?>