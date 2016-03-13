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
    $getPermissionsSql = "SELECT * FROM userPermisions WHERE userId = $userId AND (tableAccess = 'partnersInEducation' OR tableAccess = 'full')";
    $permissionResult = mysqli_query($conn, $getPermissionsSql);
    $fullEmail = "$userEmail@simivalleyusd.org";
    $partnerId = $_POST["partnerList"];
    if (mysqli_num_rows($permissionResult) > 0) {
        $name = $_POST["editPartner"];
        $website = $_POST["editWebsite"];
        if($name) {
          if($website) {
            $fileName = $name . '.png';
            $name = mysqli_real_escape_string($conn, $name);
            $website = mysqli_real_escape_string($conn, $website);
            $editSql = "UPDATE partnersInEducation SET
                        dateLastUpdated = NOW(),
                        userLastUpdated = '$fullEmail',
                        partner = '$name',
                        website = '$website'";
            $uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . '/community/partnersineducation/img/uploads/';
            if (!file_exists($uploadDirectory)) {
                mkdir($uploadDirectory, 0777, true);
            }
            if(move_uploaded_file($_FILES['editImg']['tmp_name'], $uploadDirectory . $_POST['editPartner'] . '.png')) {
              $fileName = $name . '.png';
              $fileName = mysqli_real_escape_string($conn, $fileName);
              $fileName = htmlspecialchars($fileName, ENT_QUOTES);
              $editSql .= ", imgSrc = 'uploads/$fileName'";
            } else {
              $editSql .= ", imgSrc = NULL";
            }
            $editSql .= " WHERE id = $partnerId";
            if(mysqli_query($conn, $editSql)) {
              logChange($userEmail, $editSql, "Partners in Education", "partnersInEducation");
              $output = "<div class='alert alert-success'>Partner Edited Successfully!</div>";
            } else {
              $output = "<div class='alert alert-danger'>There was an error, please try again.</div>";
            }
          } else {
            $output = "<div class='alert alert-danger'>Please Enter a Website</div>";
          }
        } else {
          $output = "<div class='alert alert-danger'>Please Enter a Name</div>";
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
