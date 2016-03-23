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

$badChar = array_merge(
        array_map('chr', range(0,31)),
        array("<", ">", ":", '"', "/", "\\", "|", "?", "*"));

if ($userId != -1) {
    $getPermissionsSql = "SELECT * FROM userPermisions WHERE userId = $userId AND (tableAccess = 'speakerseries' OR tableAccess = 'full')";
    $permissionResult = mysqli_query($conn, $getPermissionsSql);
    $fullEmail = "$userEmail@simivalleyusd.org";
    if (mysqli_num_rows($permissionResult) > 0) {
      $newDate = $_POST["newDate"];
      $newName = $_POST["newName"];
      $newLocation = $_POST["newLocation"];
      if($newName) {
        if($newLocation) {
          if($newDate) {
            $newDate = substr($newDate, 0, strpos($newDate, "T")) . " " . substr($newDate, strpos($newDate, "T") + 1) . ":00";
            $uploadDirectory = $_SERVER["DOCUMENT_ROOT"] . "/resources/content/speakerseries/uploads/";
            if (!file_exists($uploadDirectory)) {
                mkdir($uploadDirectory, 0777, true);
            }
            $newPosterFileExt = pathinfo($_FILES['newPosterThumb']['name'], PATHINFO_EXTENSION);
            $newPosterFileName = str_replace($badChar, "", $newName) . ".$newPosterFileExt";
            if(move_uploaded_file($_FILES['newPosterThumb']['tmp_name'], $uploadDirectory . $newPosterFileName)) {
              $newPosterLargeFileExt = pathinfo($_FILES['newPosterLarge']['name'], PATHINFO_EXTENSION);
              $newPosterLargeFileName = str_replace($badChar, "", $newName) . ".$newPosterLargeFileExt";
              if(move_uploaded_file($_FILES['newPosterLarge']['tmp_name'], $uploadDirectory . $newPosterLargeFileName)) {
                $infoFileThumbExists = !empty($_FILES["newInfoThumb"]["name"]);
                $infoFileLargeExists = !empty($_FILES["newInfoLarge"]["name"]);
                $infoFileError = false;
                if(($infoFileThumbExists && !$infoFileLargeExists) || ($infoFileLargeExists && !$infoFileThumbExists)) {
                  $infoFileError = true;
                }
                if(!$infoFileError) {
                  $infoFiles = $infoFileLargeExists && $infoFileThumbExists;
                  $continue = true;
                  if($infoFiles) {
                    $continue = false;
                    $infoFileThumbExt = pathinfo($_FILES['newInfoThumb']['name'], PATHINFO_EXTENSION);
                    $newInfoFileThumbName = str_replace($badChar, "", $newName) . "-INFO.$infoFileThumbExt";
                    if(move_uploaded_file($_FILES['newInfoThumb']['tmp_name'], $uploadDirectory . $newInfoFileThumbName)) {
                      $infoFileLargeExt = pathinfo($_FILES['newInfoLarge']['name'], PATHINFO_EXTENSION);
                      $newInfoFileLargeName = str_replace($badChar, "", $newName) . "-INFO.$infoFileLargeExt";
                      if(move_uploaded_file($_FILES['newInfoLarge']['tmp_name'], $uploadDirectory . $newInfoFileLargeName)) {
                        $continue = true;
                      } else {
                        $output = "<div class='alert alert-danger'>There was an error, please try again.</div>";
                      }
                    } else {
                      $output = "<div class='alert alert-danger'>There was an error, please try again.</div>";
                    }
                  }
                  if($continue) {
                    $insertSql = "INSERT INTO speakerseries (
                                              userCreated,
                                              userLastUpdated,
                                              lastUpdated,
                                              title,
                                              posterThumb,
                                              posterLarge,
                                              showDate,
                                              location";
                    if($infoFiles) {
                      $insertSql .= ", infoThumb, infoLarge";
                    }
                    $insertSql .= ") VALUES (
                                  '$fullEmail',
                                  '$fullEmail',
                                  NOW(),
                                  '$newName',
                                  'uploads/$newPosterFileName',
                                  'uploads/$newPosterLargeFileName',
                                  '$newDate',
                                  '$newLocation'";
                    if($infoFiles) {
                      $insertSql .= ", 'uploads/$newInfoFileThumbName', 'uploads/$newInfoFileLargeName'";
                    }
                    $insertSql .= ")";
                    if(mysqli_query($conn, $insertSql)) {
                      logChange($userEmail, $insertSql, "Speaker Series", "speakerseries");
                      $output = "<div class='alert alert-success'>Speaker Series added successfully!</div>";
                    } else {
                      $output = "<div class='alert alert-danger'>There was an error, please try again.</div>";
                    }
                  }
                } else {
                  $output = "<div class='alert alert-danger'>Upload either both or none of the info files.</div>";
                }
              } else {
                $output = "<div class='alert alert-danger'>There was an error, please try again.</div>";
              }
            } else {
              $output = "<div class='alert alert-danger'>There was an error, please try again.</div>";
            }
          } else {
            $output = "<div class='alert alert-danger'>Please Enter a Date</div>";
          }
        } else {
          $output = "<div class='alert alert-danger'>Please Enter a Location</div>";
        }
      } else {
        $output = "<div class='alert alert-danger'>Please Enter a Ttile</div>";
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
