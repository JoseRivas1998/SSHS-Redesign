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
    $getPermissionsSql = "SELECT * FROM userPermisions WHERE userId = $userId AND (tableAccess = 'supportStaff' OR tableAccess = 'full')";
    $permissionResult = mysqli_query($conn, $getPermissionsSql);
    $fullEmail = "$userEmail@simivalleyusd.org";
    if (mysqli_num_rows($permissionResult) > 0) {
        $newFirstName = $_POST["newFirstName"];
        $newLastName = $_POST["newLastName"];
        $newEmail = $_POST["newEmail"];
        $newRole = $_POST["newRole"];
        if ($newFirstName) {
            if ($newLastName) {
                if ($newEmail && filter_var($newEmail, FILTER_VALIDATE_EMAIL)) {
                    if ($newRole) {
                      $newFirstName = mysqli_real_escape_string($conn, $newFirstName);
                      $newLastName = mysqli_real_escape_string($conn, $newLastName);
                      $newEmail = mysqli_real_escape_string($conn, $newEmail);
                      $newRole = mysqli_real_escape_string($conn, $newRole);
                      $insertSql = "INSERT INTO supportStaff (userCreated, dateLastUpdated, userLastUpdated, firstName, lastName, email, role)
                        VALUES ('$fullEmail', NOW(), '$fullEmail', '$newFirstName', '$newLastName', '$newEmail', '$newRole')";
                      if (mysqli_query($conn, $insertSql)) {
                          $output = "<div class='alert alert-success'>Support Staff Member Added!</div>";
                      } else {
                          $output = "<div class='alert alert-danger'>There was an error, please try again.</div>";
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
