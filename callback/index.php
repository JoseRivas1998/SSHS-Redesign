<?php
/**
 * Created by PhpStorm.
 * User: Nicholas Parks
 * Date: 1/27/2016
 * Time: 4:30 PM
 */
session_start();

require_once $_SERVER["DOCUMENT_ROOT"] . '\inc\google\api\src\Google\autoload.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '\inc\google\api\src\Google\Client.php';

$client = new Google_Client();
$client->setAccessType("online");
$client->setApplicationName("SSHS - Admin Login");
$client->setClientId(getenv("GOOGLE_CLIENT_ID"));
$client->setClientSecret(getenv("GOOGLE_CLIENT_SECRET"));
$client->addScope(Google_Service_Oauth2::USERINFO_EMAIL);
$client->setRedirectUri('http://localhost/callback');

$service = new Google_Service_Oauth2($client);

if (isset($_GET['code'])) {
    $client->authenticate($_GET['code']);
    $_SESSION['token'] = $client->getAccessToken();
}

if (isset($_SESSION['token'])) {
    $token = $_SESSION['token'];
    $client->setAccessToken($token);
}

if(isset($_SESSION['token'])) {
    $user = $service->userinfo->get();
    if(strpos($user->email, '@simivalleyusd.org') && isAdmin($user->email)) {
        $_SESSION['name'] = $user->name;
        $_SESSION['email'] = $user->email;
        $redirect_url = $_SESSION['redirect_url'] ? $_SESSION['redirect_url'] : $_SERVER['HTTP_HOST'];
        unset($_SESSION['redirect_url']);
        header('Location: ' . $redirect_url);
    } else {
        session_destroy();
        header('Location: http://' . $_SERVER["HTTP_HOST"] . '/404');
    }
}

function isAdmin($email) {
    $userEmailArray = explode('@', $email);
    $userEmail = $userEmailArray[0];

    $root = $_SERVER["DOCUMENT_ROOT"];

    include($root . "/inc/dbConnect.php");

    $return = false;

    $getIdSql = "SELECT * FROM users WHERE email = '$userEmail' LIMIT 1";

    $usersResult = mysqli_query($conn, $getIdSql);
    if (mysqli_num_rows($usersResult) > 0) {
        $return = true;
    }

    return $return;

}
