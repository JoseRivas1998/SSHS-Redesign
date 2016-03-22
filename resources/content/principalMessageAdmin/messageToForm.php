<?php

$root = $_SERVER["DOCUMENT_ROOT"];

include($root . "/inc/dbConnect.php");

$mId = $_POST["mId"];

$sql = "SELECT * FROM principalMessage WHERE id = $mId LIMIT 1";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $output = array();
        $output["publishDate"] = $row["publishDate"];
        $output["message"] = $row["message"];
    }
}


echo json_encode($output);

mysqli_close($conn);
?>
