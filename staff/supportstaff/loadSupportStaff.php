<?php
$incPath = $_SERVER['DOCUMENT_ROOT'];
$incPath .= "/inc/dbConnect.php";
include($incPath);

$sql = "SELECT firstName, lastName, email, role FROM supportStaff ORDER BY lastName";

$result = mysqli_query($conn, $sql);

$openDiv = "<div class='col-xs-12 col-sm-4 support'>";
$closeDiv = "</div>";

if(mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {

    $firstName = $row["firstName"];
		$lastName = $row["lastName"];
		$email = $row["email"];
		$role = $row["role"];

    echo "<div class='row'>";

    echo "$openDiv";
    echo "<a href='mailto:$email' target='_blank'>$lastName, $firstName</a>";
    echo "$closeDiv";

    echo "$openDiv";
    echo "<a href='mailto:$email' target='_blank' class='supportEmail'>$email</a>";
    echo "$closeDiv";

    echo "$openDiv";
    echo "$role";
    echo "$closeDiv";

    echo "$closeDiv";

    echo "<hr/>";
	}
}


mysqli_close($conn);
?>
