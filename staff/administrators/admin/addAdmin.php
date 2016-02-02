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
    $getPermissionsSql = "SELECT * FROM userPermisions WHERE userId = $userId AND (tableAccess = 'administrators' OR tableAccess = 'full')";
    $permissionResult = mysqli_query($conn, $getPermissionsSql);
    $fullEmail = "$userEmail@simivalleyusd.org";
    if (mysqli_num_rows($permissionResult) > 0) {
        $noImg = (empty($_FILES["newImg"]["name"]) || is_null($_FILES["newImg"]["name"]));
        $newFirstName = $_POST["newFirstName"];
        $newLastName = $_POST["newLastName"];
        $newEmail = $_POST["newEmail"];
        $newRole = $_POST["newRole"];
        $newLink = $_POST["newLink"];
        $newLinkText = $_POST["newLinkText"];
        $newOrderNum = (int) $_POST["newOrderNum"];
        if($newFirstName) {
          if($newLastName) {
            if($newEmail && filter_var($newEmail, FILTER_VALIDATE_EMAIL)) {
              if($newRole) {
                if($_POST["newOrderNum"] && $newOrderNum > 0) {
                  $continue = false;
                  if(!$noImg) {
                    $uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . '/staff/administrators/img/uploads/';
                    $ext = pathinfo($_FILES['newImg']['name'], PATHINFO_EXTENSION);
                    if (!file_exists($uploadDirectory)) {
                        mkdir($uploadDirectory, 0777, true);
                    }
                    if(move_uploaded_file($_FILES['newImg']['tmp_name'], $uploadDirectory . "$newFirstName-$newLastName.$ext")) {
                        $continue = true;
                    }
                  } else {
                    $continue = true;
                  }
                } else {
                  $output = "<div class='alert alert-danger'>Enter an Order Number greater than 0</div>";
                }
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
