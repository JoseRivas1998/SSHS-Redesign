<?php
$root = $_SERVER["DOCUMENT_ROOT"];

include($root . "/inc/dbConnect.php");

$sql = "SELECT * FROM supportStaff ORDER BY lastName asc";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $index = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $lastName = $row["lastName"];
        $firstName = $row["firstName"];
        $id = $row["id"];
        if ($index != 0) {
            echo "<option value='$id'>$lastName, $firstName</option>";
        } else {
            echo "<option value='$id' selected>$lastName, $firstName</option>";
        }
        $index++;
    }
}

?>
