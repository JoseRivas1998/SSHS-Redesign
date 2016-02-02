<?php
$root = $_SERVER["DOCUMENT_ROOT"];

include($root . "/inc/dbConnect.php");

$sql = "SELECT * FROM homeCarousel";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $index = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $imgSrc = $row["fileSrc"];
        if(substr($imgSrc, 0, 8) == "uploads/") {
          $imgSrc = substr($imgSrc, 8);
        }
        $id = $row["id"];
        if ($index != 0) {
            echo "<option value='$id'>$imgSrc</option>";
        } else {
            echo "<option value='$id' selected>$imgSrc</option>";
        }
        $index++;
    }
}

mysqli_close($conn);

?>
