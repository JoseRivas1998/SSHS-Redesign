<?php
/**
 * Created by PhpStorm.
 * User: Nicholas Parks
 * Date: 1/26/2016
 * Time: 4:36 PM
 */

session_start();

if(!isset($_SESSION['token'])){
    require_once __DIR__ . '/api/src/Google/autoload.php';
    require_once __DIR__ . '/api/src/Google/Client.php';

    //Yes this can be spoofed however they'd need knowledge of how to edit requests (unlikely)
    $_SESSION['redirect_url'] = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    $client = new Google_Client();
    $client->setAccessType("online");
    $client->setApplicationName("SSHS - Admin Login");
    $client->setClientId(getenv("GOOGLE_CLIENT_ID"));
    $client->setClientSecret(getenv("GOOGLE_CLIENT_SECRET"));
    $client->addScope(Google_Service_Oauth2::USERINFO_EMAIL);
    $client->setRedirectUri('http://' . $_SERVER['HTTP_HOST'] . '/callback');
    $service = new Google_Service_Oauth2($client);

    $auth = $client->createAuthUrl();
    header('Location: ' . filter_var($auth, FILTER_SANITIZE_URL));
}


if (isset($_GET['logout'])) {
    unset($_SESSION['token']);
    unset($_SESSION['email']);
    unset($_SESSION['name']);
    session_destroy();
    header('Location: http://' . $_SERVER["HTTP_HOST"]);
}
