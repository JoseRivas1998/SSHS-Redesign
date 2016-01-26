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
  $getPermissionsSql = "SELECT * FROM userPermisions WHERE userId = $userId AND (tableAccess = 'supportStaff' OR tableAccess = 'full')";
  $permissionResult = mysqli_query($conn, $getPermissionsSql);
  $fullEmail = "$userEmail@simivalleyusd.org";
  if(mysqli_num_rows($permissionResult) > 0) {
    $newFirstName = $_POST["newFirstName"];
    $newLastName = $_POST["newLastName"];
    $newEmail = $_POST["newEmail"];
    $newRole = $_POST["newRole"];
    if($newFirstName) {
      if($newLastName) {
        if($newEmail && filter_var($newEmail, FILTER_VALIDATE_EMAIL)) {
          if($newRole) {
            $insertSql = "INSERT INTO supportStaff (userCreated, dateLastUpdated, userLastUpdated, firstName, lastName, email, role)
                          VALUES ('$fullEmail', NOW(), '$fullEmail', '$newFirstName', '$newLastName', '$newEmail', '$newRole')";
            $output = "<div class='alert alert-success'>$insertSql</div>";
          } else {
            $output = "<div class='alert alert-danger'>Enter a Position</div>";
          }
        } else {
          $output = "<div class='alert alert-danger'>Enter a Valid Email</div>";
        }
      } else {
        $output = "<div class='alert alert-danger'>Enter a Last Name</div>";
      }
    } else {
      $output = "<div class='alert alert-danger'>Enter a First Name</div>";
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
