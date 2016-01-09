<?php
$hostname = $_ENV["HTTP_DB_HOST"];
$username = $_ENV["HTTP_DB_USER"];
$password = $_ENV["HTTP_DB_PASS"];
$database = "websshs";
$conn = mysqli_connect($hostname, $username, $password, $database);
if (mysqli_connect_errno()) {
   die("Connect failed: %s\n" + mysqli_connect_error());
   exit();
}
?>
