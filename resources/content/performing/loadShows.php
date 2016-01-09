<?php

$incPath = $_SERVER['DOCUMENT_ROOT'];
$incPath .= "/inc/dbConnect.php";
include($incPath);

/**
* These strings are to make life a little easier later on ;)
*/

$show1sql = "DATE_FORMAT(firstShow, '%W, %M %D @ %l:%i %p')";
$show2sql = "DATE_FORMAT(secondShow, '%W, %M %D @ %l:%i %p')";
$show3sql = "DATE_FORMAT(thirdShow, '%W, %M %D @ %l:%i %p')";
$show4sql = "DATE_FORMAT(fourthShow, '%W, %M %D @ %l:%i %p')";
$show5sql = "DATE_FORMAT(fithShow, '%W, %M %D @ %l:%i %p')";
$show6sql = "DATE_FORMAT(sixthShow, '%W, %M %D @ %l:%i %p')";

$futureSql = "SELECT title, posterPath, $show1sql, $show2sql, $show3sql, $show4sql, $show5sql, $show6sql, ticket1, ticket2, ticket3, ticket4, location FROM performances WHERE lastShow >= CURRENT_DATE() ORDER BY firstShow desc";

echo "<div class='col-xs-12'>";
echo "<div class='section-title'>On Sale Now</div>";

loadShows($conn, $futureSql, $show1sql, $show2sql, $show3sql, $show4sql, $show5sql, $show6sql);

echo "</div>";

$pastSql = "SELECT title, posterPath, $show1sql, $show2sql, $show3sql, $show4sql, $show5sql, $show6sql, ticket1, ticket2, ticket3, ticket4, location FROM performances WHERE lastShow < CURRENT_DATE() ORDER BY firstShow desc";

echo "<div class='col-xs-12'>";
echo "<div class='section-title'>Past Performances</div>";

loadShows($conn, $pastSql, $show1sql, $show2sql, $show3sql, $show4sql, $show5sql, $show6sql);

echo "</div>";

function loadShows($connection, $sql, $show1sql, $show2sql, $show3sql, $show4sql, $show5sql, $show6sql) {
	$result = mysqli_query($connection, $sql);

	if(mysqli_num_rows($result) > 0) {
		$index = 0;
		$openRow;
		$closeRow;
		while($row = mysqli_fetch_assoc($result)){

			$openRow = ($index % 2 == 0);
			$closeRow = (($index - 1) % 2 == 0);

			$title = $row["title"];

			$poster = $row["posterPath"];
			if(is_null($poster)) {
				$poster = "na.png";
			}

			$show1 = $row["$show1sql"];

			$show2 = $row["$show2sql"];
			$displayShow2 = is_null($show2) !== true;

			$show3 = $row["$show3sql"];
			$displayShow3 = is_null($show3) !== true;

			$show4 = $row["$show4sql"];
			$displayShow4 = is_null($show4) !== true;

			$show5 = $row["$show5sql"];
			$displayShow5 = is_null($show5) !== true;

			$show6 = $row["$show6sql"];
			$displayShow6 = is_null($show6) !== true;

			$ticket1 = $row["ticket1"];

			$ticket2 = $row["ticket2"];
			$displayTicket2 = is_null($ticket2) !== true;

			$ticket3 = $row["ticket3"];
			$displayTicket3 = is_null($ticket3) !== true;

			$ticket4 = $row["ticket4"];
			$displayTicket4 = is_null($ticket4) !== true;

			$location = $row["location"];


			if($openRow) {
				echo "<div class='row'>";
			}
			echo"<div class='col-sm-6 col-xs-12'>";
			echo "<div class='panel panel-default'>";
			echo "<div class='panel-heading'>";
			echo "<div class='panel-title'>$title</div>";
			echo "</div>";
			echo "<div class='panel-body'>";
			echo "<div class='col-xs-4'>";
			echo "<a class=\"imgLink\" onclick=\"window.open('https://www.vendini.com/ticket-software.html?t=tix&amp;w=f1f8510a3fb659e2555d210b59d7bd33', 'order_window', 'width=611,height=510,status=yes,left='+((window.screen.width - 611)/2)+',top='+((window.screen.height - 510)/2.5)).focus();return false;\"  href=\"$poster\" target=\"_blank\"><img class=\"img-responsive\" src=\"$poster\"></a>";
			echo "</div>";
			echo "<div class='col-xs-8'>";
			echo "<ul class='showList'>";
			echo "<li>$show1</li>";
			if($displayShow2) {
				echo "<li>$show2</li>";
			}
			if($displayShow3) {
				echo "<li>$show3</li>";
			}
			if($displayShow4) {
				echo "<li>$show4</li>";
			}
			if($displayShow5) {
				echo "<li>$show5</li>";
			}
			if($displayShow6) {
				echo "<li>$show6</li>";
			}
			echo "</ul>";
			echo "<strong>Tickets:</strong>";
			echo "<ul class='showList'>";
			echo "<li>$ticket1</li>";
			if($displayTicket2) {
				echo "<li>$ticket2</li>";
			}
			if($displayTicket3) {
				echo "<li>$ticket3</li>";
			}
			if($displayTicket4) {
				echo "<li>$ticket4</li>";
			}
			echo "</ul>";
			echo "$location<br />";
			echo "</div>";
			echo "</div>";
			echo "</div>";
			echo "</div>";
			if($closeRow) {
				echo "</div>";
			}
			$index++;

		}
		if($openRow) {
			echo "</div>";
		}
	}
}

?>
