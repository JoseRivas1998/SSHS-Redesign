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
    $getPermissionsSql = "SELECT * FROM userPermisions WHERE userId = $userId AND (tableAccess = 'teachers' OR tableAccess = 'full')";
    $permissionResult = mysqli_query($conn, $getPermissionsSql);
    $fullEmail = "$userEmail@simivalleyusd.org";
    if (mysqli_num_rows($permissionResult) > 0) {
        $newFirstName = $_POST["newFirstName"];
        $newLastName = $_POST["newLastName"];
        $newEmail = $_POST["newEmail"];
        $newImgExists = (empty($_FILES["newImg"]["name"]) !== true && is_null($_FILES["newImg"]["name"]) !== true);
        $newClass1 = $_POST["newClass1"];
        $newAcad = $_POST["newAcad"];
        $newFChair = isset($_POST["newFChair"]);
        $newDChair = isset($_POST["newDChair"]);
        $newAChair = isset($_POST["newAChair"]);
        $newClass2 = $_POST["newClass2"];
        $newClass3 = $_POST["newClass3"];
        $newClass4 = $_POST["newClass4"];
        $newClass5 = $_POST["newClass5"];
        $newClass6 = $_POST["newClass6"];
        $newClass7 = $_POST["newClass7"];
        $link1Text = $_POST["link1Text"];
        $link1href = $_POST["link1href"];
        $link2Text = $_POST["link2Text"];
        $link2href = $_POST["link2href"];
        $link3Text = $_POST["link3Text"];
        $link3href = $_POST["link3href"];
        if($newFirstName) {
          if($newLastName) {
            if(filter_var($newEmail, FILTER_VALIDATE_EMAIL)) {
              if($newClass1) {
                $lContinue = true;
                if($link1Text || $link1href) {
                  if(!(!$link1Text || !$link1href)) {
                    if($link2Text || $link2href) {
                      if(!(!$link2Text || !$link2href)) {
                        if($link3Text || $link3href) {
                          if(!(!$link3Text || !$link3href)) {
                            $lContinue = true;
                          } else {
                            $output = "<div class='alert alert-danger'>A Link Must Have a URL and Text</div>";
                            $lContinue = false;
                          }
                        }
                      } else {
                        $output = "<div class='alert alert-danger'>A Link Must Have a URL and Text</div>";
                        $lContinue = false;
                      }
                    }
                  } else {
                    $output = "<div class='alert alert-danger'>A Link Must Have a URL and Text</div>";
                    $lContinue = false;
                  }
                }
                if($lContinue) {
                  $fContinue = true;
                  if($newImgExists) {
                    $uploadDirectory = $_SERVER["DOCUMENT_ROOT"] . "/staff/teachers/img/uploads/";
                    $imgExt = pathinfo($_FILES['newImg']['name'], PATHINFO_EXTENSION);
                    $fileSafeFirstName = str_replace($badChar, "", $newFirstName);
                    $fileSafeLastName = str_replace($badChar, "", $newLastName);
                    $newImgFileName = $fileSafeFirstName . $fileSafeLastName . "." .$imgExt;
                    if (!file_exists($uploadDirectory)) {
                        mkdir($uploadDirectory, 0777, true);
                    }
                    if(move_uploaded_file($_FILES['newImg']['tmp_name'], $uploadDirectory . $newImgFileName)) {
                      $fContinue = true;
                    } else {
                      $fContinue = false;
                      $output = "<div class='alert alert-danger'>There was an error uploading your file.</div>";
                    }
                  } else {
                    $fContinue = true;
                  }
                  if($fContinue) {
                    $insertSql = "INSERT INTO teachers (
                                              userCreated,
                                              userLastUpdated,
                                              timeLastUpdated,
                                              firstName,
                                              lastName,
                                              email,
                                              class1,
                                              academy";
                    if($newFChair) {
                      $insertSql .= ", foundingChair";
                    }
                    if($newDChair) {
                      $insertSql .= ", departmentChair";
                    }
                    if($newAChair) {
                      $insertSql .= ", academyChair";
                    }
                    if($newClass2) {
                      $insertSql .= ", class2";
                      if($newClass3) {
                        $insertSql .= ", class3";
                        if($newClass4) {
                          $insertSql .= ", class4";
                          if($newClass5) {
                            $insertSql .= ", class5";
                            if($newClass6) {
                              $insertSql .= ", class6";
                              if($newClass7) {
                                $insertSql .= ", class7";
                              }
                            }
                          }
                        }
                      }
                    }
                    if($link1Text || $link1href) {
                      $insertSql .= ", link1";
                      $insertSql .= ", link1Text";
                      if($link2Text || $link2href) {
                        $insertSql .= ", link2";
                        $insertSql .= ", link2Text";
                        if($link3Text || $link3href) {
                          $insertSql .= ", link3";
                          $insertSql .= ", link3Text";
                        }
                      }
                    }
                    if($newImgExists) {
                      $insertSql .= ", imgPath";
                    }
                    $insertSql .= ") VALUES (
                                      '$fullEmail',
                                      '$fullEmail',
                                      NOW(),
                                      '$newFirstName',
                                      '$newLastName',
                                      '$newEmail',
                                      '$newClass1',
                                      '$newAcad'";
                    if($newFChair) {
                      $insertSql .= ", 1";
                    }
                    if($newDChair) {
                      $insertSql .= ", 1";
                    }
                    if($newAChair) {
                      $insertSql .= ", 1";
                    }
                    if($newClass2) {
                      $insertSql .= ", '$newClass2'";
                      if($newClass3) {
                        $insertSql .= ", '$newClass3'";
                        if($newClass4) {
                          $insertSql .= ", '$newClass4'";
                          if($newClass5) {
                            $insertSql .= ", '$newClass5'";
                            if($newClass6) {
                              $insertSql .= ", '$newClass6'";
                              if($newClass7) {
                                $insertSql .= ", '$newClass7'";
                              }
                            }
                          }
                        }
                      }
                    }
                    if($link1Text || $link1href) {
                      $insertSql .= ", '$link1href'";
                      $insertSql .= ", '$link1Text'";
                      if($link2Text || $link2href) {
                        $insertSql .= ", '$link2href'";
                        $insertSql .= ", '$link2Text'";
                        if($link3Text || $link3href) {
                          $insertSql .= ", '$link3href'";
                          $insertSql .= ", '$link3Text'";
                        }
                      }
                    }
                    if($newImgExists) {
                      $insertSql .= ", 'uploads/$newImgFileName'";
                    }
                    $insertSql .= ")";
                    if(mysqli_query($conn, $insertSql)) {
                      $output = "<div class='alert alert-success'>Teacher added successfully!</div>";
                    } else {
                      $output = "<div class='alert alert-danger'>There was an error, please try again.</div>";
                    }
                  }
                }
              } else {
                $output = "<div class='alert alert-danger'>Enter at least one class.</div>";
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
