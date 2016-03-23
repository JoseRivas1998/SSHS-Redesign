<?php

$root = $_SERVER["DOCUMENT_ROOT"];

include($root . "/inc/dbConnect.php");

$sql = "SELECT * FROM homeSections";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  $output = array();
  while ($row = mysqli_fetch_assoc($result)) {
    $section = $row["homeSection"];
    $toggled = $row["toggled"];
    $output[$section] = $toggled;
  }
}

mysqli_close($conn);

echo json_encode($output);

?>
