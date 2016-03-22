<?php
$root = $_SERVER["DOCUMENT_ROOT"];

include($root . "/inc/dbConnect.php");

$dateFormat = "DATE_FORMAT(publishDate,'%Y, %M %d')";

$sql = "SELECT id, $dateFormat FROM principalMessage ORDER BY publishDate desc";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $index = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $text = $row[$dateFormat];
        $id = $row["id"];
        if ($index != 0) {
            echo "<option value='$id'>$text</option>";
        } else {
            echo "<option value='$id' selected>$text</option>";
        }
        $index++;
    }
}

mysqli_close($conn);

?>
