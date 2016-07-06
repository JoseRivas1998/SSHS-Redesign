<?php

$validName = false;
$validEmail = false;
$validSubject = false;
$validBody = false;

$output = array();

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$body = $_POST["body"];
$output["sent"] = false;

if(empty($name) !== true && is_null($name) !== true) {
  $validName = true;
}

if(empty($email) !== true && is_null($email) !== true && filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $validEmail = true;
}

if(empty($subject) !== true && is_null($subject) !== true) {
  $validSubject = true;
}

if(empty($body) !== true && is_null($body) !== true) {
  $validBody = true;
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

if($validSubject) {
  $output["resSubject"] = "<i class='fa fa-check'></i>";
} else {
  $output["resSubject"] = "<i class='fa fa-exclamation-circle'></i>";
}

if($validBody) {
  $output["resBody"] = "<i class='fa fa-check'></i>";
} else {
  $output["resBody"] = "<i class='fa fa-exclamation-circle'></i>";
}

if($validName && $validEmail && $validSubject && $validBody) {
  $to = "JoseRivas823@gmail.com";
  $from = "Webmasters Contact Form";
  $mailBody = "From: $name\nEmail: $email\nMessage Body:\n$body";
  if(mail($to, $subject, $mailBody, $from)) {
    $output["result"] = "<div class='alert alert-success'>Webmasters Contacted!</div>";
    $output["sent"] = true;
  } else {
    $output["result"] = "<div class='alert alert-danger'>There was an error, please try again.</div>";
  }
} else {
  $output["result"] = "<div class='alert alert-danger'>Please complete the form.</div>";
}

echo json_encode($output);


?>
