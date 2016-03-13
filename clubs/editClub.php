<?php
session_start();
$root = $_SERVER["DOCUMENT_ROOT"];

include($root . "/inc/dbConnect.php");
include($root . "/inc/adminLogger.php");

$output;

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
        $clubId = $_POST["clubId"];
        $clubName = $_POST["name"];
        $clubSite = $_POST["website"];
        $clubPresident = $_POST["president"];
        $clubadvisor = $_POST["advisor"];
        $clubTime = $_POST["time"];
        $clubRoom = $_POST["room"];
        $clubApproved = $_POST["approved"];

        $clubName = mysqli_real_escape_string($conn, $clubName);
        $clubPresident = mysqli_real_escape_string($conn, $clubPresident);
        $clubadvisor = mysqli_real_escape_string($conn, $clubadvisor);
        $updateSql = "UPDATE clubs SET
                  name = '$clubName',
                  approved = $clubApproved,
                  president = '$clubPresident',
                  advisor = '$clubadvisor'";
        if (empty($clubSite) !== true) {
          $clubSite = mysqli_real_escape_string($conn, $clubSite);
          $clubSite = htmlspecialchars($clubSite, ENT_QUOTES);
          $updateSql .= ", website = '$clubSite'";
        } else {
            $updateSql .= ", website = NULL";
        }
        if (empty($clubTime) !== true) {
          $clubTime = mysqli_real_escape_string($conn, $clubTime);
          $updateSql .= ", meetingTime = '$clubTime'";
        } else {
          $updateSql .= ", meetingTime = NULL";
        }
        if (empty($clubRoom) !== true) {
          $clubRoom = mysqli_real_escape_string($conn, $clubRoom);
          $updateSql .= ", meetingRoom = '$clubRoom'";
        } else {
            $updateSql .= ", meetingRoom = NULL";
        }
        $updateSql .= " WHERE id = $clubId";
        if (mysqli_query($conn, $updateSql)) {
          logChange($userEmail, $updateSql, "Clubs", "clubs");
            $output = "<div class='alert alert-success'>Club Successfully Edited!</div>";
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
