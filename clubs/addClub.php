<?php

$root = $_SERVER["DOCUMENT_ROOT"];

include($root . "/inc/dbConnect.php");

$output;

$userEmail = $_POST["userEmail"];
$userId = -1;

$getIdSql = "SELECT * FROM users WHERE email = '$userEmail' LIMIT 1";

$usersResult = mysqli_query($conn, $getIdSql);
if(mysqli_num_rows($usersResult) > 0) {
  while($usersRow = mysqli_fetch_assoc($usersResult)) {
    $userId = $usersRow["id"];
  }
}

if($userId != -1) {
  $getPermissionsSql = "SELECT * FROM userPermisions WHERE userId = $userId AND tableAccess = 'clubs'";
  $permissionResult = mysqli_query($conn, $getPermissionsSql);
  if(mysqli_num_rows($permissionResult) > 0) {
    $name = $_POST["name"];
    $website = $_POST["website"];
    $president = $_POST["president"];
    $advisor = $_POST["advisor"];
    $time = $_POST["time"];
    $room = $_POST["room"];
    if($name) {
      if($president) {
        if($advisor) {
          $insertSql = "INSERT INTO clubs (userCreated, name, president, advisor";
          if($website) {
            $insertSql .= ", website";
          }
          if($time) {
            $insertSql .= ", meetingTime";
          }
          if($room) {
            $insertSql .= ", meetingRoom";
          }
          $insertSql .= ") VALUES($userEmail@simivalleyusd.org, '$name', '$president', '$advisor'";
          if($website) {
            $insertSql .= ", '$website'";
          }
          if($time) {
            $insertSql .= ", '$time'";
          }
          if($room) {
            $insertSql .= ", '$room'";
          }
          $insertSql .= ")";
          $output = "<div class='alert alert-success'>$insertSql</div>";
        } else {
          $output = "<div class='alert alert-danger'>Enter a club advisor.</div>";
        }
      } else {
        $output = "<div class='alert alert-danger'>Enter a club president.</div>";
      }
    } else {
      $output = "<div class='alert alert-danger'>Enter a club name.</div>";
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
