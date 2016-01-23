<?php

$root = $_SERVER["DOCUMENT_ROOT"];

include($root . "/inc/dbConnect.php");

$sql = "SELECT * FROM clubs ORDER BY id asc";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		$name = $row["name"];
		$id = $row["id"];
		echo "<option value='$id'>$name</option>";
	}
}

mysqli_close($conn);
?>
