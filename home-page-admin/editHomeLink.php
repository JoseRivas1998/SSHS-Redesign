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
    $getPermissionsSql = "SELECT * FROM userPermisions WHERE userId = $userId AND (tableAccess = 'homePage' OR tableAccess = 'full')";
    $permissionResult = mysqli_query($conn, $getPermissionsSql);
    $fullEmail = "$userEmail@simivalleyusd.org";
    if (mysqli_num_rows($permissionResult) > 0) {
      $editText = $_POST["editText"];
      $editHref = $_POST["editHref"];
      $editIcon = $_POST["editIcon"];
      $editSection = $_POST["editSection"];
      $linkId = $_POST["linkId"];
      if($editText) {
        if(strlen($editText) <= 40) {
          if($editHref) {
            if($editIcon) {
              $editText = mysqli_real_escape_string($conn, $editText);
              $editHref = mysqli_real_escape_string($conn, $editHref);
              $editHref = htmlspecialchars($editHref, ENT_QUOTES);
              $editIcon = mysqli_real_escape_string($conn, $editIcon);
              $editSection = mysqli_real_escape_string($conn, $editSection);
              $updateSql = "UPDATE homePage SET
                            dateLastUpdated = NOW(),
                            userLastUpdated = '$fullEmail',
                            linkText = '$editText',
                            linkHref = '$editHref',
                            icon = '$editIcon',
                            section = '$editSection'
                            WHERE id = $linkId";
              if(mysqli_query($conn, $updateSql)) {
                $output = "<div class='alert alert-success'>Home Page Link Updated Successfully!</div>";
              } else {
                $error = mysqli_error($conn);
                $output = "<div class='alert alert-danger'>There was an error, please try again.</div>";
              }
            } else {
              $output = "<div class='alert alert-danger'>Please Enter a Font Awesome Icon Code</div>";
            }
          } else {
            $output = "<div class='alert alert-danger'>Please Enter a Link URL</div>";
          }
        } else {
          $output = "<div class='alert alert-danger'>Link can not be more than 40 characters.</div>";
        }
      } else {
        $output = "<div class='alert alert-danger'>Please Enter a Link Text</div>";
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
