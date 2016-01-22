<?php

$root = $_SERVER["DOCUMENT_ROOT"];

include($root . "/inc/dbConnect.php");

$clubId = $_POST["clubId"];

$sql = "SELECT * FROM clubs WHERE id = $clubId LIMIT 1";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		$output = array();
		$output["clubName"] = $row["name"];
		$output["clubSite"] = $row["website"];
		$output["clubApproved"] = $row["approved"];
		$output["clubPresident"] = $row["president"];
		$output["clubAdvisor"] = $row["advisor"];
		$output["clubTime"] = $row["meetingTime"];
		$output["clubRoom"] = $row["meetinRoom"];
	}
}


echo json_encode($output);

mysqli_close($conn);
?>