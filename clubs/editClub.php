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
  $getPermissionsSql = "SELECT * FROM userPermisions WHERE userId = $userId AND (tableAccess = 'clubs' OR tableAccess = 'full')";
  $permissionResult = mysqli_query($conn, $getPermissionsSql);
  if(mysqli_num_rows($permissionResult) > 0) {
    $clubId = $_POST["clubId"];
    $clubName = $_POST["name"];
    $clubSite = $_POST["website"];
    $clubPresident = $_POST["president"];
    $clubadvisor = $_POST["advisor"];
    $clubTime = $_POST["time"];
    $clubRoom = $_POST["room"];
    $clubApproved = $_POST["approved"];
    $updateSql = "UPDATE clubs SET
                  name = '$clubName',
                  approved = $clubApproved,
                  president = '$clubPresident',
                  advisor = '$clubadvisor'";
    if(empty($clubSite) !== true) {
      $updateSql .= ", website = '$clubSite'";
    }
    if(empty($clubTime) !== true) {
      $updateSql .= ", meetingTime = '$clubTime'";
    }
    if(empty($clubRoom)) {
      $updateSql .= ", meetingRoom = '$clubRoom'";
    }
    $updateSql .= " WHERE id = $clubId";
    $output = "<div class='alert alert-success'>$updateSql</div>";
  } else {
    $output = "<div class='alert alert-danger'>Sorry, your email does not have permission to manage this page.</div>";
  }
} else {
  $output = "<div class='alert alert-danger'>Sorry, your email does not have permission to manage the website.</div>";
}

echo $output;

mysqli_close($conn);

?>
