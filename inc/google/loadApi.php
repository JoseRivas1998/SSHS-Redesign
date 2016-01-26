<?php  
$root = $_SERVER["DOCUMENT_ROOT"];

include ($root . "/inc/google/api/src");

$client = new Google_Client();
$client->setAuthConfigFile('client_secrets.json');
$client->addScope(Google_Service_Drive::);
$client->setRedirectUri('http://' . $_SERVER['HTTP_HOST'] . '/oauth2callback.php');

?>