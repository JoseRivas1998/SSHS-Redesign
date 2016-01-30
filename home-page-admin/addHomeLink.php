<?php
session_start();

$root = $_SERVER["DOCUMENT_ROOT"];

include($root . "/inc/dbConnect.php");

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
    $getPermissionsSql = "SELECT * FROM userPermisions WHERE userId = $userId AND (tableAccess = 'homePage' OR tableAccess = 'full')";
    $permissionResult = mysqli_query($conn, $getPermissionsSql);
    $fullEmail = "$userEmail@simivalleyusd.org";
    if (mysqli_num_rows($permissionResult) > 0) {
        $newText = $_POST["newText"];
        $newHref = $_POST["newHref"];
        $newIcon = $_POST["newIcon"];
        $newSection = $_POST["newSection"];
        if($newText) {
          if($newHref) {
            if($newIcon) {
              $insertSql = "INSERT INTO homePage (userCreated, dateLastUpdated, userLastUpdated, linkText, linkHref, icon, section)
                                          VALUES ('$fullEmail', NOW(), '$fullEmail', '$newText', '$newHref', '$newIcon', '$newSection')";
              if(mysqli_query($conn, $insertSql)) {
                $output = "<div class='alert alert-success'>Link Added Successfully!</div>";
              } else {
                $output = "<div class='alert alert-danger'>There was an error, please try again.</div>";
              }
            } else {
              $output = "<div class='alert alert-danger'>Please Enter a Font Awesome Icon Code</div>";
            }
          } else {
            $output = "<div class='alert alert-danger'>Please Enter a Link URL</div>";
          }
        } else {
          $output = "<div class='alert alert-danger'>Please Enter a Link Text</div>";
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
