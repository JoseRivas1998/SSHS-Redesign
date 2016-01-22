<?php

$root = $_SERVER["DOCUMENT_ROOT"];

include($root . "/inc/dbConnect.php");

$clubId = $_POST["clubId"]

$sql = "SELECT * FROM clubs WHERE id = $clubId LIMIT 1";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		$ouput[] = $row;
	}
}

echo json_encode($ouput);

mysqli_close($conn);
?>