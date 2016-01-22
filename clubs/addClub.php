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

  $output = "<div class='alert alert-success'>$userEmail, $userId</div>";
} else {
  $output = "<div class='alert alert-alert'>Sorry, your email does not have permission to manage the website.</div>";
}

echo $output;

mysqli_close($conn);

?>
