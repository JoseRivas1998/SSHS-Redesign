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
    $getPermissionsSql = "SELECT * FROM userPermisions WHERE userId = $userId AND (tableAccess = 'actionBar' OR tableAccess = 'full')";
    $permissionResult = mysqli_query($conn, $getPermissionsSql);
    $fullEmail = "$userEmail@simivalleyusd.org";
    if (mysqli_num_rows($permissionResult) > 0) {
        $barId = $_POST["barId"];
        $barText = $_POST["barText"];
        $barLink = $_POST["barLink"];
        $publishDate = $_POST["publishDate"];
        $showUntilDate = $_POST["showUntilDate"];
        if ($barText) {
            if ($publishDate) {
                if ($showUntilDate) {
                    $editSql = "UPDATE actionBar SET
          dateUpdated = NOW(),
          userUpdated = '$fullEmail',
          barText = '$barText',
          publishDate = '$publishDate',
          showUntil = '$showUntilDate'";
                    if (empty($barLink)) {
                        $editSql .= ", link = NULL";
                    } else {
                        $editSql .= ", link = '$barLink'";
                    }
                    $editSql .= " WHERE id = $barId";
                    if (mysqli_query($conn, $editSql)) {
                        $output = "<div class='alert alert-success'>Action Bar Editted Successfully!</div>";
                    } else {
                        $output = "<div class='alert alert-danger'>There was an error, please try again</div>";
                    }
                } else {
                    $output = "<div class='alert alert-danger'>Enter Show Until Date</div>";
                }
            } else {
                $output = "<div class='alert alert-danger'>Enter Publish Date</div>";
            }
        } else {
            $output = "<div class='alert alert-danger'>Enter Bar Text</div>";
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
