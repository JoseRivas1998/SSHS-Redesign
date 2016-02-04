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

$badChar = array_merge(
        array_map('chr', range(0,31)),
        array("<", ">", ":", '"', "/", "\\", "|", "?", "*"));

if ($userId != -1) {
    $getPermissionsSql = "SELECT * FROM userPermisions WHERE userId = $userId AND (tableAccess = 'speakerseries' OR tableAccess = 'full')";
    $permissionResult = mysqli_query($conn, $getPermissionsSql);
    $fullEmail = "$userEmail@simivalleyusd.org";
    if (mysqli_num_rows($permissionResult) > 0) {
      $editDate = $_POST["editDate"];
      $editName = $_POST["editName"];
      $editLocation = $_POST["editLocation"];
      if($editName) {
        if($editLocation) {
          if($editDate) {
            $editDate = substr($editDate, 0, strpos($editDate, "T")) . " " . substr($editDate, strpos($editDate, "T") + 1);
            $uploadDirectory = $_SERVER["DOCUMENT_ROOT"] . "/resources/content/speakerseries/uploads/";
            if (!file_exists($uploadDirectory)) {
                mkdir($uploadDirectory, 0777, true);
            }
            $editPosterFileExt = pathinfo($_FILES['editPosterThumb']['name'], PATHINFO_EXTENSION);
            $editPosterFileName = str_replace($badChar, "", $editName) . ".$editPosterFileExt";
            if(move_uploaded_file($_FILES['editPosterThumb']['tmp_name'], $uploadDirectory . $editPosterFileName)) {
              $editPosterLargeFileExt = pathinfo($_FILES['editPosterLarge']['name'], PATHINFO_EXTENSION);
              $editPosterLargeFileName = str_replace($badChar, "", $editName) . ".$editPosterLargeFileExt";
              if(move_uploaded_file($_FILES['editPosterLarge']['tmp_name'], $uploadDirectory . $editPosterLargeFileName)) {
                $infoFileThumbExists = !empty($_FILES["editInfoThumb"]["name"]);
                $infoFileLargeExists = !empty($_FILES["editInfoLarge"]["name"]);
                $infoFileError = false;
                if(($infoFileThumbExists && !$infoFileLargeExists) || ($infoFileLargeExists && !$infoFileThumbExists)) {
                  $infoFileError = true;
                }
                if(!$infoFileError) {
                  $infoFiles = $infoFileLargeExists && $infoFileThumbExists;
                  $continue = true;
                  if($infoFiles) {
                    $continue = false;
                    $infoFileThumbExt = pathinfo($_FILES['editInfoThumb']['name'], PATHINFO_EXTENSION);
                    $editInfoFileThumbName = str_replace($badChar, "", $editName) . "-INFO.$infoFileThumbExt";
                    if(move_uploaded_file($_FILES['editInfoThumb']['tmp_name'], $uploadDirectory . $editInfoFileThumbName)) {
                      $infoFileLargeExt = pathinfo($_FILES['editInfoLarge']['name'], PATHINFO_EXTENSION);
                      $editInfoFileLargeName = str_replace($badChar, "", $editName) . "-INFO.$infoFileLargeExt";
                      if(move_uploaded_file($_FILES['editInfoLarge']['tmp_name'], $uploadDirectory . $editInfoFileLargeName)) {
                        $continue = true;
                      } else {
                        $output = "<div class='alert alert-danger'>There was an error, please try again.</div>";
                      }
                    } else {
                      $output = "<div class='alert alert-danger'>There was an error, please try again.</div>";
                    }
                  }
                  if($continue) {
                    $seriesId = $_POST["seriesList"];
                    $updateSql = "UPDATE speakerseries SET
                                                      userLastUpdated = '$fullEmail',
                                                      lastUpdated = NOW(),
                                                      title = '$editName',
                                                      posterThumb = 'uploads/$editPosterFileName',
                                                      posterLarge = 'uploads/$editPosterLargeFileName',
                                                      showDate = '$editDate',
                                                      location = '$editLocation'";
                    if($infoFiles) {
                      $updateSql .= ", infoThumb = 'uploads/$editInfoFileThumbName'
                                     , infoLarge = 'uploads/$editInfoFileLargeName'";
                    } else {
                      $updateSql .= ", infoThumb = NULL
                                     , infoLarge = NULL";
                    }
                    $updateSql .= " WHERE id = $seriesId";
                    if(mysqli_query($conn, $updateSql)) {
                      $output = "<div class='alert alert-success'>Speaker Series editted successfully!</div>";
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
