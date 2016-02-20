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
        $newFirstName = $_POST["editFirstName"];
        $newLastName = $_POST["editLastName"];
        $newEmail = $_POST["editEmail"];
        $newImgExists = (empty($_FILES["editImg"]["name"]) !== true && is_null($_FILES["editImg"]["name"]) !== true);
        $newClass1 = $_POST["editClass1"];
        $newAcad = $_POST["editAcad"];
        $newFChair = isset($_POST["editFChair"]);
        $newDChair = isset($_POST["editDChair"]);
        $newAChair = isset($_POST["editAChair"]);
        $newClass2 = $_POST["editClass2"];
        $newClass3 = $_POST["editClass3"];
        $newClass4 = $_POST["editClass4"];
        $newClass5 = $_POST["editClass5"];
        $newClass6 = $_POST["editClass6"];
        $newClass7 = $_POST["editClass7"];
        $link1Text = $_POST["editlink1Text"];
        $link1href = $_POST["editlink1href"];
        $link2Text = $_POST["editlink2Text"];
        $link2href = $_POST["editlink2href"];
        $link3Text = $_POST["editlink3Text"];
        $link3href = $_POST["editlink3href"];
        $teacherId = $_POST["teacherList"];
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
                    $imgExt = pathinfo($_FILES['editImg']['name'], PATHINFO_EXTENSION);
                    $fileSafeFirstName = str_replace($badChar, "", $newFirstName);
                    $fileSafeLastName = str_replace($badChar, "", $newLastName);
                    $newImgFileName = $fileSafeFirstName . $fileSafeLastName . "." .$imgExt;
                    if (!file_exists($uploadDirectory)) {
                        mkdir($uploadDirectory, 0777, true);
                    }
                    if(move_uploaded_file($_FILES['editImg']['tmp_name'], $uploadDirectory . $newImgFileName)) {
                      $fContinue = true;
                    } else {
                      $fContinue = false;
                      $output = "<div class='alert alert-danger'>There was an error uploading your file.</div>";
                    }
                  } else {
                    $fContinue = true;
                  }
                  if($fContinue) {
                    $updateSql = "UPDATE teachers SET
                                              userLastUpdated = '$fullEmail',
                                              timeLastUpdated = NOW(),
                                              firstName = '$newFirstName',
                                              lastName = '$newLastName',
                                              email = '$newEmail',
                                              class1 = '$newClass1',
                                              academy = '$newAcad'";
                    if($newFChair) {
                      $updateSql .= ", foundingChair = 1";
                    } else {
                      $updateSql .= ", foundingChair = 0";
                    }
                    if($newDChair) {
                      $updateSql .= ", departmentChair = 1";
                    } else {
                      $updateSql .= ", departmentChair = 0";
                    }
                    if($newAChair) {
                      $updateSql .= ", academyChair = 1";
                    } else {
                      $updateSql .= ", academyChair = 0";
                    }
                    if($newClass2) {
                      $updateSql .= ", class2 = '$newClass2'";
                      if($newClass3) {
                        $updateSql .= ", class3 = '$newClass3'";
                        if($newClass4) {
                          $updateSql .= ", class4 = '$newClass4'";
                          if($newClass5) {
                            $updateSql .= ", class5 = '$newClass5'";
                            if($newClass6) {
                              $updateSql .= ", class6 = '$newClass6'";
                              if($newClass7) {
                                $updateSql .= ", class7 = '$newClass7'";
                              } else {
                                $updateSql .= ", class7 = NULL";
                              }
                            } else {
                              $updateSql .= ", class6 = NULL, class7 = NULL";
                            }
                          } else {
                            $updateSql .= ", class5 = NULL, class6 = NULL, class7 = NULL";
                          }
                        } else {
                          $updateSql .= ", class4 = NULL, class5 = NULL, class6 = NULL, class7 = NULL";
                        }
                      } else {
                        $updateSql .= ", class3 = NULL, class4 = NULL, class5 = NULL, class6 = NULL, class7 = NULL";
                      }
                    } else {
                      $updateSql .= ", class2 = NULL, class3 = NULL, class4 = NULL, class5 = NULL, class6 = NULL, class7 = NULL";
                    }
                    if($link1Text || $link1href) {
                      $updateSql .= ", link1 = '$link1href'";
                      $updateSql .= ", link1Text = '$link1Text'";
                      if($link2Text || $link2href) {
                        $updateSql .= ", link2 = '$link2href'";
                        $updateSql .= ", link2Text = '$link2Text'";
                        if($link3Text || $link3href) {
                          $updateSql .= ", link3 = '$link3href'";
                          $updateSql .= ", link3Text = '$link3Text'";
                        } else {
                          $updateSql .= ", link3 = NULL";
                          $updateSql .= ", link3Text = NULL";
                        }
                      } else {
                        $updateSql .= ", link2 = NULL";
                        $updateSql .= ", link2Text = NULL";
                      }
                    } else {
                      $updateSql .= ", link1 = NULL";
                      $updateSql .= ", link1Text = NULL";
                      $updateSql .= ", link2 = NULL";
                      $updateSql .= ", link2Text = NULL";
                    }
                    if($newImgExists) {
                      $updateSql .= ", imgPath = 'uploads/$newImgFileName'";
                    } else if(isset($_POST["removeImg"])) {
                      $updateSql .= ", imgPath = NULL";
                    }
                    $updateSql .= " WHERE id = $teacherId";
                    if(mysqli_query($conn, $updateSql)) {
                      $output = "<div class='alert alert-success'>Teacher editted successfully!</div>";
                    }else {
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
