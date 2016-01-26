<?php

$root = $_SERVER["DOCUMENT_ROOT"];

include($root . "/inc/dbConnect.php");

$output;

$userEmail = $_POST["userEmail"];
$userId = -1;

$getIdSql = "SELECT * FROM users WHERE email = '$userEmail' LIMIT 1";

$staffId = $_POST["staffId"];

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
    $deleteSql = "DELETE FROM supportStaff WHERE id = $staffId";
    if(mysqli_query($conn, $deleteSql)) {
      $output = "<div class='alert alert-success'>Support Staff Member Deleted</div>";
    } else {
      $output = "<div class='alert alert-danger'>There was an error</div>";
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
