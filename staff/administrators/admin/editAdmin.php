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
    $getPermissionsSql = "SELECT * FROM userPermisions WHERE userId = $userId AND (tableAccess = 'administrators' OR tableAccess = 'full')";
    $permissionResult = mysqli_query($conn, $getPermissionsSql);
    $fullEmail = "$userEmail@simivalleyusd.org";
    if (mysqli_num_rows($permissionResult) > 0) {
        $noImg = (empty($_FILES["editImg"]["name"]) || is_null($_FILES["editImg"]["name"]));
        $editFirstName = $_POST["editFirstName"];
        $editLastName = $_POST["editLastName"];
        $editEmail = $_POST["editEmail"];
        $editRole = $_POST["editRole"];
        $editLink = $_POST["editLink"];
        $editLinkText = $_POST["editLinkText"];
        $editOrerNum = (int) $_POST["editOrderNum"];
        $adminId = $_POST["adminList"];
        if($editFirstName) {
          if($editLastName) {
            if($editEmail && filter_var($editEmail, FILTER_VALIDATE_EMAIL)) {
              if($editRole) {
                if($_POST["editOrderNum"] && $editOrerNum > 0) {
                  $continue = false;
                  if(!$noImg) {
                    $uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . '/staff/administrators/img/uploads/';
                    $ext = pathinfo($_FILES['editImg']['name'], PATHINFO_EXTENSION);
                    if (!file_exists($uploadDirectory)) {
                        mkdir($uploadDirectory, 0777, true);
                    }
                    if(move_uploaded_file($_FILES['editImg']['tmp_name'], $uploadDirectory . "$editFirstName-$editLastName.$ext")) {
                        $continue = true;
                    }
                  } else {
                    $continue = true;
                  }
                  if($continue) {
                    $updateSql = "UPDATE administrators SET
                                              dateLastUpdated = NOW(),
                                              userLastUpdated = '$fullEmail',
                                              firstName = '$editFirstName',
                                              lastName = '$editLastName',
                                              email = '$editEmail',
                                              role = '$editRole',
                                              sortingNumber = $editOrerNum";
                    if($noImg) {
                      $updateSql .= ", imgPath = NULL";
                    } else {
                      $updateSql .= ", imgPath = 'uploads/$editFirstName-$editLastName.$ext'";
                    }
                    if($editLink) {
                      $updateSql .= ", link1 = '$editLink'";
                    } else {
                      $updateSql .= ", link1 = NULL";
                    }
                    if($editLinkText) {
                      $updateSql .= ", link1Text = '$editLinkText'";
                    } else {
                      $updateSql .= ", link1Text = NULL";
                    }
                    $updateSql .= " WHERE id = $adminId";
                    if(mysqli_query($conn, $updateSql)) {
                      $output = "<div class='alert alert-success'>Admin Successfully Editted</div>";
                    } else {
                      $output = "<div class='alert alert-danger'>There was an error, please try again." . mysqli_error($conn) . "</div>";
                    }
                  } else {
                    $output = "<div class='alert alert-danger'>There was an error, please try again.</div>";
                  }
                } else {
                  $output = "<div class='alert alert-danger'>Enter an Order Number greater than 0</div>";
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
