<?php

$root = $_SERVER["DOCUMENT_ROOT"];

include($root . "/inc/dbConnect.php");

$linkId = $_POST["linkId"];

$sql = "SELECT * FROM homePage WHERE id = $linkId LIMIT 1";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $output = array();
      $output["resText"] = $row["linkText"];
      $output["resHref"] = $row["linkHref"];
      $output["resIcon"] = $row["icon"];
      $output["resSection"] = $row["section"];
    }
}


echo json_encode($output);

mysqli_close($conn);
?>
