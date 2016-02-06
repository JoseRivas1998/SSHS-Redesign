<?php
session_start();

$root = $_SERVER["DOCUMENT_ROOT"];

include($root . "/inc/dbConnect.php");

include("format.php");

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
    $getPermissionsSql = "SELECT * FROM userPermisions WHERE userId = $userId AND (tableAccess = 'performances' OR tableAccess = 'full')";
    $permissionResult = mysqli_query($conn, $getPermissionsSql);
    $fullEmail = "$userEmail@simivalleyusd.org";
    if (mysqli_num_rows($permissionResult) > 0) {
      $title = $_POST["title"];
      $show1 = $_POST["show1"];
      $show2 = $_POST["show2"];
      $show3 = $_POST["show3"];
      $show4 = $_POST["show4"];
      $show5 = $_POST["show5"];
      $show6 = $_POST["show6"];
      $ticket1 = $_POST["ticket1"];
      $ticket2 = $_POST["ticket2"];
      $ticket3 = $_POST["ticket3"];
      $ticket4 = $_POST["ticket4"];
      $location = $_POST["location"];
      $posterExists = (empty($_FILES["poster"]["name"]) !== true && is_null($_FILES["poster"]["name"]) !== true);
      if($title) {
        if($show1) {
          $show1 = formatTimeFromHtml($show1, true);
          if($ticket1) {
            if($show2) {
              $show2 = formatTimeFromHtml($show2, true);
              if($show3) {
                $show3 = formatTimeFromHtml($show3, true);
                if($show4) {
                  $show4 = formatTimeFromHtml($show4, true);
                  if($show5) {
                    $show5 = formatTimeFromHtml($show5, true);
                    if($show6) {
                      $show6 = formatTimeFromHtml($show6, true);
                      $lastShow = $show6;
                    } else {
                      $lastShow = $show5;
                    }
                  } else {
                    $lastShow = $show4;
                  }
                } else {
                  $lastShow = $show3;
                }
              } else {
                $lastShow = $show2;
              }
            } else {
              $lastShow = $show1;
            }
            $continue = true;
            if($posterExists) {
              $uploadDirectory = $_SERVER["DOCUMENT_ROOT"] . "/resources/content/performing/uploads/";
              $posterFileExt = pathinfo($_FILES['poster']['name'], PATHINFO_EXTENSION);
              $posterFileName = fileSafe($title) . "." . $posterFileExt;
              if (!file_exists($uploadDirectory)) {
                  mkdir($uploadDirectory, 0777, true);
              }
              if(move_uploaded_file($_FILES["poster"]["tmp_name"], $uploadDirectory . $posterFileName)) {
                $continue = true;
              } else {
                $output = "<div class='alert alert-danger'>There was an error uploading your file, please try again.</div>";
                $continue = false;
              }
            }
            if($continue) {
              $insertSql = "INSERT INTO performances (
                                        userCreated,
                                        userLastUpdated,
                                        lastUpdated,
                                        title,
                                        firstShow,
                                        lastShow,
                                        ticket1
              ";
              if($posterExists) {
                $insertSql .= ", posterPath";
              }
              if($show2) {
                $insertSql .= ", secondShow";
                if($show3) {
                  $insertSql .= ", thirdShow";
                  if($show4) {
                    $insertSql .= ", fourthshow";
                    if($show5) {
                      $insertSql .= ", fithShow";
                      if($show6) {
                        $insertSql .= ", sixthShow";
                      }
                    }
                  }
                }
              }
              if($ticket2) {
                $insertSql .= ", ticket2";
                if($ticket3) {
                  $insertSql .= ", ticket3";
                  if($ticket4) {
                    $insertSql .= ", ticket4";
                  }
                }
              }
              if($location) {
                $insertSql .= ", location";
              }
              $insertSql .= ") VALUES (
                                '$fullEmail',
                                '$fullEmail',
                                NOW(),
                                '$title',
                                '$show1',
                                '$lastShow',
                                '$ticket1'
              ";
              if($posterExists) {
                $insertSql .= ", 'uploads/$posterFileName'";
              }
              if($show2) {
                $insertSql .= ", '$show2'";
                if($show3) {
                  $insertSql .= ", '$show3'";
                  if($show4) {
                    $insertSql .= ", '$show4'";
                    if($show5) {
                      $insertSql .= ", '$show5'";
                      if($show6) {
                        $insertSql .= ", '$show6'";
                      }
                    }
                  }
                }
              }
              if($ticket2) {
                $insertSql .= ", '$ticket2'";
                if($ticket3) {
                  $insertSql .= ", '$ticket3'";
                  if($ticket4) {
                    $insertSql .= ", '$ticket4'";
                  }
                }
              }
              if($location) {
                $insertSql .= ", '$location'";
              }
              $insertSql .= ")";
              if(mysqli_query($conn, $insertSql)) {
                $output = "<div class='alert alert-success'>Show added successfully!</div>";
              } else {
                $output = "<div class='alert alert-danger'>There was an error, please try again.</div>";
              }
            }
          } else {
            $output = "<div class='alert alert-danger'>Enter at least the first ticket price.</div>";
          }
        } else {
          $output = "<div class='alert alert-danger'>Enter at least the first show date.</div>";
        }
      } else {
        $output = "<div class='alert alert-danger'>Please enter a title.</div>";
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
