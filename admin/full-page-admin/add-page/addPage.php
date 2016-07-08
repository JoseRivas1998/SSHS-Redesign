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
            $sql = "INSERT INTO fullPages (userCreated, dateLastUpdated, userLastUpdated, title, `path`, content";
            if($addnav) {
              $sql .= ", sidenav";
            }
            $sql .= ") VALUES ('$fullEmail', NOW(), '$fullEmail', '$title', '$path', '$content'";
            if($addnav) {
              $category = $_POST['category'];
              $sql .= ", '$category'";
            }
            $sql .= ")";
            if(mysqli_query($conn, $sql)) {
              logChange($userEmail, $sql, "Add Full Page", "fullPages");
              $output = "<div class='alert alert-success fade in'><i class='close fa fa-times' data-dismiss='alert' aria-label='close'></i>Page Successfully Added!</div>";
            } else {
              $output = "<div class='alert alert-danger fade in'><i class='close fa fa-times' data-dismiss='alert' aria-label='close'></i>There was an error, please try again.</div>";
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
