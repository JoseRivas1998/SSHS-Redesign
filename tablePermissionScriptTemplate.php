<?php
session_start();

$root = $_SERVER["DOCUMENT_ROOT"];

include($root . "/inc/dbConnect.php");
include($root . "/inc/adminLogger.php");

$output;

$userEmail = $_SESSION["email"];
$userEmailArray = explode('@', $userEmail);
$userEmail = $userEmailArray[0];
$userId = -1;

$getIdSql = "SELECT * FROM users WHERE email = '$userEmail' LIMIT 1";

$usersResult = mysqli_query($conn, $getIdSql);
if (mysqli_num_rows($usersResult) > 0) {
    while ($usersRow = mysqli_fetch_assoc($usersResult)) {
        $userId = $usersRow["id"];
    }
}


if ($userId != -1) {
    $getPermissionsSql = "SELECT * FROM userPermisions WHERE userId = $userId AND (tableAccess = 'TABLE' OR tableAccess = 'full')";
    $permissionResult = mysqli_query($conn, $getPermissionsSql);
    $fullEmail = "$userEmail@simivalleyusd.org";
    if (mysqli_num_rows($permissionResult) > 0) {
        //code to edit table goes here
    } else {
        $output = "<div class='alert alert-danger'>Sorry, your email does not have permission to manage this page.</div>";
    }
} else {
    $output = "<div class='alert alert-danger'>Sorry, your email does not have permission to manage the website.</div>";
}

echo $output;

mysqli_close($conn);

?>
