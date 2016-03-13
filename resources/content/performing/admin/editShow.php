<?php
session_start();

$root = $_SERVER["DOCUMENT_ROOT"];

include($root . "/inc/dbConnect.php");
include($root . "/inc/adminLogger.php");

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
      $title = $_POST["edittitle"];
      $show1 = $_POST["editshow1"];
      $show2 = $_POST["editshow2"];
      $show3 = $_POST["editshow3"];
      $show4 = $_POST["editshow4"];
      $show5 = $_POST["editshow5"];
      $show6 = $_POST["editshow6"];
      $ticket1 = $_POST["editticket1"];
      $ticket2 = $_POST["editticket2"];
      $ticket3 = $_POST["editticket3"];
      $ticket4 = $_POST["editticket4"];
      $location = $_POST["editlocation"];
      $posterExists = (empty($_FILES["editposter"]["name"]) !== true && is_null($_FILES["editposter"]["name"]) !== true);
      if($title) {
        if($show1) {
          $show1 = formatTimeFromHtml($show1, false);
          if($ticket1) {
            if($show2) {
              $show2 = formatTimeFromHtml($show2, false);
              if($show3) {
                $show3 = formatTimeFromHtml($show3, false);
                if($show4) {
                  $show4 = formatTimeFromHtml($show4, false);
                  if($show5) {
                    $show5 = formatTimeFromHtml($show5, false);
                    if($show6) {
                      $show6 = formatTimeFromHtml($show6, false);
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
              $posterFileExt = pathinfo($_FILES['editposter']['name'], PATHINFO_EXTENSION);
              $posterFileName = fileSafe($title) . "." . $posterFileExt;
              if (!file_exists($uploadDirectory)) {
                  mkdir($uploadDirectory, 0777, true);
              }
              if(move_uploaded_file($_FILES["editposter"]["tmp_name"], $uploadDirectory . $posterFileName)) {
                $continue = true;
              } else {
                $output = "<div class='alert alert-danger'>There was an error uploading your file, please try again.</div>";
                $continue = false;
              }
            }
            if($continue) {
              $showId = $_POST["showList"];
              $updateSql = "UPDATE performances SET
                                        userLastUpdated = '$fullEmail',
                                        lastUpdated = NOW(),
                                        title = '$title',
                                        firstShow = '$show1',
                                        lastShow = '$lastShow',
                                        ticket1 = '$ticket1'
              ";
              if($posterExists) {
                $updateSql .= ", posterPath = 'uploads/$posterFileName'";
              } else if(isset($_POST["removeImg"])) {
                $updateSql .= ", posterPath = NULL";
              }
              if($show2) {
                $updateSql .= ", secondShow = '$show2'";
                if($show3) {
                  $updateSql .= ", thirdShow = '$show3'";
                  if($show4) {
                    $updateSql .= ", fourthshow = '$show4'";
                    if($show5) {
                      $updateSql .= ", fithShow = '$show5'";
                      if($show6) {
                        $updateSql .= ", sixthShow = '$show6'";
                      } else {
                        $updateSql .= ", sixthShow = NULL";
                      }
                    } else {
                      $updateSql .= ", fithShow = NULL";
                    }
                  } else {
                    $updateSql .= ", fourthshow = NULL";
                  }
                } else {
                  $updateSql .= ", thirdShow = NULL";
                }
              } else {
                $updateSql .= ", secondShow = NULL";
              }
              if($ticket2) {
                $updateSql .= ", ticket2 = '$ticket2'";
                if($ticket3) {
                  $updateSql .= ", ticket3 = '$ticket3'";
                  if($ticket4) {
                    $updateSql .= ", ticket4 = '$ticket4'";
                  } else {
                    $updateSql .= ", ticket4 = NULL";
                  }
                } else {
                  $updateSql .= ", ticket3 = NULL";
                }
              } else {
                $updateSql .= ", ticket2 = NULL";
              }
              if($location) {
                $updateSql .= ", location = '$location'";
              } else {
                $updateSql .= ", location = NULL";
              }
              $updateSql .= " WHERE id = $showId";
              if(mysqli_query($conn, $updateSql)) {
                logChange($userEmail, $updateSql, "Performances", "performances");
                $output = "<div class='alert alert-success'>Show editted successfully!</div>";
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
