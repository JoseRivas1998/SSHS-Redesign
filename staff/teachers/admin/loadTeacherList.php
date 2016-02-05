<?php
$root = $_SERVER["DOCUMENT_ROOT"];

include($root . "/inc/dbConnect.php");

$sql = "SELECT * FROM teachers ORDER BY lastName, firstName";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $index = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row["lastName"] . ", " . $row["firstName"];
        $id = $row["id"];
        if ($index != 0) {
            echo "<option value='$id'>$name</option>";
        } else {
            echo "<option value='$id' selected>$name</option>";
        }
        $index++;
    }
}

mysqli_close($conn);

?>
