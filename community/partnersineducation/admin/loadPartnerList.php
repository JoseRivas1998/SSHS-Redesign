<?php
$root = $_SERVER["DOCUMENT_ROOT"];

include($root . "/inc/dbConnect.php");

$sql = "SELECT * FROM partnersInEducation ORDER BY partner";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $index = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $partner = $row["partner"];
        $id = $row["id"];
        if ($index != 0) {
            echo "<option value='$id'>$partner</option>";
        } else {
            echo "<option value='$id' selected>$partner</option>";
        }
        $index++;
    }
}

?>
