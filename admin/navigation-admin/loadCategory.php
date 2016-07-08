<?php

$root = $_SERVER["DOCUMENT_ROOT"];

include($root . "/inc/dbConnect.php");

$error = array();
$error["err"] = "There was an error";

$output = json_encode($error);

$category = $_POST["category"];

$sql = "SELECT * FROM navigation WHERE category = '$category' LIMIT 1";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    $output = $row["jsonobj"];
  }
}

echo $output;

mysqli_close($conn);

?>
