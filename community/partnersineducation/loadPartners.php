<?php

$incPath = $_SERVER['DOCUMENT_ROOT'];
$incPath .= "/inc/dbConnect.php";
include($incPath);

$sql = "SELECT * FROM partnersInEducation ORDER BY orderNum";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
    $name = $row["partner"];
    $imgPath = $row["imgSrc"];
    $website = $row["website"];
    $displayImg = is_null($imgPath) !== true;
    echo "<div class='row'>";

    echo "<div class='col-xs-12 col-sm-4 partner'>";
    echo "$name";
    echo "</div>";

    echo "<div class='col-xs-12 col-sm-4 partner'>";
    echo "<a href='$website' target='_blank' class='supportLink'>$website</a>";
    echo "</div>";

    echo "<div class='col-xs-12 col-sm-4 partner'>";
    if($displayImg) {
      echo "<img class='img-responsive' src='img/$imgPath' alt='$name Logo'>";
    }
    echo "</div>";

    echo "</div>";
    echo "<hr />";
	}
}

mysqli_close($conn);

?>
