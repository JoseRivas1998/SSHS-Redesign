<?php
include($_SERVER["DOCUMENT_ROOT"] . "/inc/dbConnect.php");

$output = array();

$validName = false;
$validEmail = false;
$validGithub = false;

$name = $_POST["fName"];
$email = $_POST["email"];
$github = $_POST["github"];
$phone = $_POST["phone"];
$skype = $_POST["skype"];

$output["success"] = false;

if(empty($name) !== true && is_null($name) !== true) {
  $validName = true;
  $name = mysqli_real_escape_string($conn, $name);
  $output["name"] = $name;
}

if(empty($email) !== true && is_null($email) !== true && filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $validEmail = true;
  $email = mysqli_real_escape_string($conn, strtolower($email));
  $output["email"] = $email;
}

if(empty($github) !== true && is_null($github) !== true) {
  $validGithub = true;
  $github = mysqli_real_escape_string($conn, $github);
  $output["github"] = $github;
}

$emailExistsSQL = "SELECT * FROM gamedev_members WHERE email = '$email'";
if(mysqli_num_rows(mysqli_query($conn, $emailExistsSQL)) > 0) {
  $validEmail = false;
}

if($validName) {
  $output["resName"] = "<i class='fa fa-check'></i>";
} else {
  $output["resName"] = "<i class='fa fa-exclamation-circle'></i>";
}

if($validEmail) {
  $output["resEmail"] = "<i class='fa fa-check'></i>";
} else {
  $output["resEmail"] = "<i class='fa fa-exclamation-circle'></i>";
}

if($validGithub) {
  $output["resGithub"] = "<i class='fa fa-check'></i>";
} else {
  $output["resGithub"] = "<i class='fa fa-exclamation-circle'></i>";
}

if($validName && $validEmail && $validGithub) {
  $sql = "INSERT INTO gamedev_members(fName, email, github";
  if(empty($phone) !== true && is_null($phone) !== true) {
    $phone = mysqli_real_escape_string($conn, $phone);
    $sql .= ", phone";
  }
  if(empty($skype) !== true && is_null($skype) !== true) {
    $skype = mysqli_real_escape_string($conn, $skype);
    $sql .= ", skype";
  }
  $sql .= ") VALUES('$name', '$email', '$github'";
  if(empty($phone) !== true && is_null($phone) !== true) {
    $sql .= ", '$phone'";
  }
  if(empty($skype) !== true && is_null($skype) !== true) {
    $sql .= ", '$skype'";
  }
  $sql .= ")";
  $output["sql"] = $sql;
  if(mysqli_query($conn, $sql)) {
    $output["success"] = true;
    $output["resForm"] = "<div class='alert alert-success fade in'><i class='close fa fa-times' data-dismiss='alert' aria-label='close'></i>Thank you for signing up.</div>";
  } else {
    $output["resForm"] = "<div class='alert alert-danger fade in'><i class='close fa fa-times' data-dismiss='alert' aria-label='close'></i>There was an error, please try again.</div>";
  }
} else {
  $output["resForm"] = "<div class='alert alert-danger fade in'><i class='close fa fa-times' data-dismiss='alert' aria-label='close'></i>Please complete the form. If it is complete, then your email may already be registered.</div>";
}

mysqli_close($conn);

echo json_encode($output);
?>
