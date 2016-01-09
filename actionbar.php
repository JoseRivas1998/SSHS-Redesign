<?php
include("inc/dbConnect.php");

$sql = "SELECT barText, link FROM actionBar WHERE publishDate <= CURRENT_DATE() and showUntil >= CURRENT_DATE() ORDER BY showUntil LIMIT 1";

$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		$text = $row["barText"];
		$link = $row["link"];
		$displayLink = is_null($link) !== true;
		$topColorHex = $row["topColorHex"];
		$centerColorHex = $row["centerColorHex"];
		$bottomColorHex = $row["bottomColorHex"];
		echo "<div class='action-bar'>";
		echo "<div class='container'>";
		echo "<div class='row'>";
		echo "<div class='col-xs-2 col-sm-1'><img src='actionbar-icon.png' alt='Action Bar' class='action-bar-img img-responsive'></div>";
		echo "<div class='col-xs-10 col-sm-11' id='action-bar-text'>";
		if($displayLink) {
			echo "<a href='$link' target='_blank'>$text</a>";
		} else {
			echo "$text";
		}
		echo "</div>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
	}
}

mysqli_close($conn);

?>
