<?php

$root = $_SERVER["DOCUMENT_ROOT"];

include($root . "/inc/dbConnect.php");

$barId = $_POST["barId"];

$sql = "SELECT * FROM actionBar WHERE id = $barId LIMIT 1";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		$output = array();
    $output["barText"] = $row["barText"];
    $output["barPublishDate"] = $row["publishDate"];
    $output["barShowUntil"] = $row["showUntil"];
    if(is_null($row["link"])) {
      $output["barLink"] = "";
    } else {
      $output["barLink"] = $row["link"];
    }
	}
}


echo json_encode($output);

mysqli_close($conn);
?>
