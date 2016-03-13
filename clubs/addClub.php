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
    $getPermissionsSql = "SELECT * FROM userPermisions WHERE userId = $userId AND (tableAccess = 'clubs' OR tableAccess = 'full')";
    $permissionResult = mysqli_query($conn, $getPermissionsSql);
    if (mysqli_num_rows($permissionResult) > 0) {
        $name = $_POST["name"];
        $website = $_POST["website"];
        $president = $_POST["president"];
        $advisor = $_POST["advisor"];
        $time = $_POST["time"];
        $room = $_POST["room"];
        if ($name) {
            if ($president) {
                if ($advisor) {
                  $name = mysqli_real_escape_string($conn, $name);
                  $president = mysqli_real_escape_string($conn, $president);
                  $advisor = mysqli_real_escape_string($conn, $advisor);
                  $insertSql = "INSERT INTO clubs (userCreated, name, president, advisor";
                  if ($website) {
                      $insertSql .= ", website";
                  }
                  if ($time) {
                      $insertSql .= ", meetingTime";
                  }
                  if ($room) {
                      $insertSql .= ", meetingRoom";
                  }
                  $insertSql .= ") VALUES('$userEmail@simivalleyusd.org', '$name', '$president', '$advisor'";
                  if ($website) {
                    $website = mysqli_real_escape_string($conn, $website);
                    $website = htmlspecialchars($website, ENT_QUOTES);
                    $insertSql .= ", '$website'";
                  }
                  if ($time) {
                    $time = mysqli_real_escape_string($conn, $time);
                    $insertSql .= ", '$time'";
                  }
                  if ($room) {
                    $room = mysqli_real_escape_string($conn, $room);
                    $insertSql .= ", '$room'";
                  }
                  $insertSql .= ")";
                  if (mysqli_query($conn, $insertSql)) {
                    logChange($userEmail, $insertSql, "Clubs", "clubs");
                      $output = "<div class='alert alert-success'>Club Successfully Added!</div>";
                  } else {
                      $output = "<div class='alert alert-danger'>There was an error, please try again.</div>";
                  }
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
