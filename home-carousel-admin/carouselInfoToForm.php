<?php
$root = $_SERVER["DOCUMENT_ROOT"];

include($root . "/inc/dbConnect.php");

$cId = $_POST["cId"];

$sql = "SELECT * FROM homeCarousel WHERE id = $cId LIMIT 1";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    $output = $row["fileSrc"];
  }
}

mysqli_close($conn);

echo $output;

?>
