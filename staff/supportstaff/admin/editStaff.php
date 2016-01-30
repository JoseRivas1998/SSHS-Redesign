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
        $staffId = $_POST["staffId"];
        $editFirstName = $_POST["editFirstName"];
        $editLastName = $_POST["editLastName"];
        $editEmail = $_POST["editEmail"];
        $editRole = $_POST["editRole"];
        if ($editFirstName) {
            if ($editLastName) {
                if ($editEmail && filter_var($editEmail, FILTER_VALIDATE_EMAIL)) {
                    if ($editRole) {
                      $editFirstName = mysqli_real_escape_string($conn, $editFirstName);
                      $editLastName = mysqli_real_escape_string($conn, $editLastName);
                      $editEmail = mysqli_real_escape_string($conn, $editEmail);
                      $editRole = mysqli_real_escape_string($conn, $editRole);
                      $editSql = "UPDATE supportStaff SET
                      dateLastUpdated = NOW(),
                      userLastUpdated = '$fullEmail',
                      firstName = '$editFirstName',
                      lastName = '$editLastName',
                      email = '$editEmail',
                      role = '$editRole'
                      WHERE id = $staffId";
                      if (mysqli_query($conn, $editSql)) {
                          $output = "<div class='alert alert-success'>Staff Member Edited Successfully!</div>";
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
