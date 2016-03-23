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
    $getPermissionsSql = "SELECT * FROM userPermisions WHERE userId = $userId AND (tableAccess = 'homeSections' OR tableAccess = 'full')";
    $permissionResult = mysqli_query($conn, $getPermissionsSql);
    $fullEmail = "$userEmail@simivalleyusd.org";
    if (mysqli_num_rows($permissionResult) > 0) {
      $quick = intval($_POST["quick"]);
      $whatsNew = intval($_POST["whatsNew"]);
      $district = intval($_POST["district"]);
      $aboutUs = intval($_POST["aboutUs"]);
      $sql = "UPDATE homeSections SET dateLastUpdated = NOW(), userLastUpdated = '$fullEmail', toggled = $quick WHERE id = 1;
              UPDATE homeSections SET dateLastUpdated = NOW(), userLastUpdated = '$fullEmail', toggled = $district WHERE id = 2;
              UPDATE homeSections SET dateLastUpdated = NOW(), userLastUpdated = '$fullEmail', toggled = $aboutUs WHERE id = 3;
              UPDATE homeSections SET dateLastUpdated = NOW(), userLastUpdated = '$fullEmail', toggled = $whatsNew WHERE id = 4;";
      if(mysqli_multi_query($conn, $sql)) {
        logChange($userEmail, $sql, "Home Sections", "homeSections");
        $output = "<div class='alert alert-success'>Home Sections Saved Successfully!</div>";
      } else {
        $output = "<div class='alert alert-danger'>There was an error, please try again.</div>";
      }
    } else {
        $output = "<div class='alert alert-danger'>Sorry, your email does not have permission to manage this page.</div>";
    }
} else {
    $output = "<div class='alert alert-danger'>Sorry, your email does not have permission to manage the website.</div>";
}

echo $output;

mysqli_close($conn);

?>
