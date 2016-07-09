<?php
session_start();

$root = $_SERVER["DOCUMENT_ROOT"];

include($root . "/inc/dbConnect.php");
include($root . "/inc/adminLogger.php");
include_once('backupPage.php');

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
    $getPermissionsSql = "SELECT * FROM userPermisions WHERE userId = $userId AND (tableAccess = 'fullPages' OR tableAccess = 'full')";
    $permissionResult = mysqli_query($conn, $getPermissionsSql);
    $fullEmail = "$userEmail@simivalleyusd.org";
    if (mysqli_num_rows($permissionResult) > 0) {
      if($_POST['title']) {
        if($_POST['path']) {
          if($_POST['content']) {
            $addnav = isset($_POST['category']);
            $title = mysqli_real_escape_string($conn, $_POST['title']);
            $path = mysqli_real_escape_string($conn, '/' . $_POST['path']);
            $content = mysqli_real_escape_string($conn, $_POST['content']);
            $id = $_POST['pageList'];
            if(backupPage($conn, $id)) {
              $sql = "UPDATE fullPages SET
                      title = '$title',
                      `path` = '$path',
                      content = '$content'";
              if($addnav) {
                $sql .= ", sidenav = '" . $_POST['category']. "'";
              } else {
                $sql .= ", sidenav = NULL";
              }
              $sql .= " WHERE id = $id";
              if(mysqli_query($conn, $sql)) {
                logChange($userEmail, $sql, "Edit Full Page", "fullPages");
                $url = "http://" . $_SERVER['HTTP_HOST'] . "/" . $_POST['path'];
                $output = "<div class='alert alert-success fade in'><i class='close fa fa-times' data-dismiss='alert' aria-label='close'></i>Changes Saved<br/><a href=\"$url\" target=\"_blank\">$url</a></div>";
              } else {
                $output = "<div class='alert alert-danger fade in'><i class='close fa fa-times' data-dismiss='alert' aria-label='close'></i>There was an error, please try again</div>";
              }
            } else {
              $output = "<div class='alert alert-danger fade in'><i class='close fa fa-times' data-dismiss='alert' aria-label='close'></i>There was an error, please try again</div>";
            }
          } else {
            $output = "<div class='alert alert-danger fade in'><i class='close fa fa-times' data-dismiss='alert' aria-label='close'></i>Please Enter Page Content</div>";
          }
        } else {
          $output = "<div class='alert alert-danger fade in'><i class='close fa fa-times' data-dismiss='alert' aria-label='close'></i>Please Enter a Path</div>";
        }
      } else {
        $output = "<div class='alert alert-danger fade in'><i class='close fa fa-times' data-dismiss='alert' aria-label='close'></i>Please Enter a Title</div>";
      }
    } else {
        $output = "<div class='alert alert-danger fade in'><i class='close fa fa-times' data-dismiss='alert' aria-label='close'></i>Sorry, your email does not have permission to manage this page.</div>";
    }
} else {
    $output = "<div class='alert alert-danger fade in'><i class='close fa fa-times' data-dismiss='alert' aria-label='close'></i>Sorry, your email does not have permission to manage the website.</div>";
}

echo $output;

mysqli_close($conn);

?>
