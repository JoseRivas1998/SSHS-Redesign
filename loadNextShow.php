<?php

include("inc/dbConnect.php");

$sql = "SELECT posterPath, title FROM  performances WHERE lastShow >= NOW() ORDER BY lastShow desc LIMIT 1";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $poster = $row["posterPath"];
        $title = $row["title"];
        echo "<span id='performingBtn'>";
        echo "<img src='resources/content/performing/$poster' alt='Coming Soon'class='img-responsive'>";
        echo "<p>";
        echo "$title";
        echo "</p>";
        echo "</span>";
    }
}

mysqli_close($conn);

?>
