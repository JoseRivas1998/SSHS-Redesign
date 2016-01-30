<?php
$root = $_SERVER["DOCUMENT_ROOT"];

include($root . "/inc/dbConnect.php");

$sql = "SELECT * FROM homePage ORDER BY linkText";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $index = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $linkText = $row["linkText"];
        $id = $row["id"];
        if ($index != 0) {
            echo "<option value='$id'>$linkText</option>";
        } else {
            echo "<option value='$id' selected>$linkText</option>";
        }
        $index++;
    }
}

?>
