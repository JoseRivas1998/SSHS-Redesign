<?php

$incPath = $_SERVER['DOCUMENT_ROOT'];
$incPath .= "/inc/dbConnect.php";
include($incPath);

$dateSql = "DATE_FORMAT(showDate, '%W, %M %D @ %l:%i %p')";

$futureSql = "SELECT title, posterThumb, posterLarge, $dateSql, location, infoThumb, infoLarge FROM speakerseries WHERE showDate >= NOW() ORDER BY showDate desc";

$pastSql = "SELECT title, posterThumb, posterLarge, $dateSql, location, infoThumb, infoLarge FROM speakerseries WHERE showDate < NOW() ORDER BY showDate desc";

echo '<div class="col-xs-12">';

echo '<div class="section-title" id="arrivingSoon">Arriving Soon</div>';

loadSeries($conn, $futureSql, $dateSql);

echo '</div>';

echo '<div class="col-xs-12">';

echo '<div class="section-title" id="pastSpeakerSeries">Past Speaker Series</div>';

loadSeries($conn, $pastSql, $dateSql);

echo '</div>';

function loadSeries($connection, $sql, $formatDate) {
    $result = mysqli_query($connection, $sql);
    if (mysqli_num_rows($result) > 0) {
        $index = 0;
        $openRow;
        $closeRow;
        while ($row = mysqli_fetch_assoc($result)) {
            $title = $row["title"];

            $posterThumb = $row["posterThumb"];
            $posterLarge = $row["posterLarge"];

            $showDate = $row["$formatDate"];

            $location = $row["location"];

            $infoThumb = $row["infoThumb"];
            $infoLarge = $row["infoLarge"];

            $notNullThumb = is_null($infoThumb) !== true;
            $notNullLarge = is_null($infoLarge) !== true;

            $displayInfo = $notNullThumb && $notNullLarge;

            $openRow = ($index % 2 == 0);
            $closeRow = (($index - 1) % 2 == 0);

            if ($openRow) {
                echo "<div class='row'>";
            }

            echo "<div class='col-sm-6 col-xs-12'>";

            echo "<div class='panel panel-default'>";

            echo "<div class='panel-heading'>";

            echo "<div class='panel-title'>$title</div>";

            echo "</div>";

            echo "<div class='panel-body'>";

            echo "<div class='col-xs-4'>";

            echo "<a href='$posterLarge' target='_blank'><img class='img-responsive' src='$posterThumb' alt='Speaker Series: $title'></a>";

            echo "</div>";

            echo "<div class='col-xs-8'>";

            echo "$showDate<br />";

            echo "$location<br />";

            if ($displayInfo) {
                echo "<a href='$infoLarge' target='_blank'><img class='img-responsive' src='$infoThumb' alt='Speaker Series: $title'></a>";
            }

            echo "</div>";

            echo "</div>";

            echo "</div>";

            echo "</div>";

            if ($closeRow) {
                echo "</div>";
            }

            $index++;
        }
        if ($openRow) {
            echo "</div>";
        }
    }
}

mysqli_close($conn);

?>
