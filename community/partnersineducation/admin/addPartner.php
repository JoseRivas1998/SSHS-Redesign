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
    $getPermissionsSql = "SELECT * FROM userPermisions WHERE userId = $userId AND (tableAccess = 'partnersInEducation' OR tableAccess = 'full')";
    $permissionResult = mysqli_query($conn, $getPermissionsSql);
    $fullEmail = "$userEmail@simivalleyusd.org";
    if (mysqli_num_rows($permissionResult) > 0) {
        $name = $_POST['newPartner'];
        $website = $_POST['newWebsite'];
        if($name) {
          if($website) {
            $uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . '/community/partnersineducation/img/uploads/';
            if (!file_exists($uploadDirectory)) {
                mkdir($uploadDirectory, 0777, true);
            }
            if(move_uploaded_file($_FILES['newImg']['tmp_name'], $uploadDirectory . $_POST['newPartner'] . '.png')) {
                $fileName = $name . '.png';
                $insertSql = "INSERT INTO partnersInEducation
                                          (userCreated, dateLastUpdated, userLastUpdated, partner, imgSrc, website)
                                    VALUES ('$fullEmail', NOW(), '$fullEmail', '$name','uploads/$fileName', '$website')";
                if(mysqli_query($conn, $insertSql)) {
                  $output = "<div class='alert alert-success'>Partner Successfully Added!</div>";
                } else {
                  $output = "<div class='alert alert-danger'>There was an error, please try again.</div>";
                }
            } else {
                $output = "<div class='alert alert-danger'>There was an error uploading your file</div>";
            }
          } else {
            $output = "<div class='alert alert-danger'>Please enter a Website</div>";
          }
        } else {
            $output = "<div class='alert alert-danger'>Please enter a Name</div>";
        }
    } else {
        $output = "<div class='alert alert-danger'>Sorry, your email does not have permission to manage this page.</div>";
    }
} else {
    $output = "<div class='alert alert-danger'>Sorry, your email does not have permission to manage the website.</div>";
}

echo $output;

mysqli_close($conn);
