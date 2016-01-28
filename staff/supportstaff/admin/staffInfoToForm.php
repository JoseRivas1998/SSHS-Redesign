<?php

$root = $_SERVER["DOCUMENT_ROOT"];

include($root . "/inc/dbConnect.php");

$staffId = $_POST["staffId"];

$sql = "SELECT * FROM supportStaff WHERE id = $staffId LIMIT 1";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $output = array();
        $output["firstName"] = $row["firstName"];
        $output["lastName"] = $row["lastName"];
        $output["email"] = $row["email"];
        $output["role"] = $row["role"];
    }
}


echo json_encode($output);

mysqli_close($conn);

?>
