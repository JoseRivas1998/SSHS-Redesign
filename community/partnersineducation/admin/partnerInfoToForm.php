<?php

$root = $_SERVER["DOCUMENT_ROOT"];

include($root . "/inc/dbConnect.php");

$partnerId = $_POST["partnerId"];

$sql = "SELECT * FROM partnersInEducation WHERE id = $partnerId LIMIT 1";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $output = array();
        $output["partner"] = $row["partner"];
        $output["website"] = $row["website"];
        if (is_null($row["imgSrc"])) {
            $output["curImg"] = "<label for='curImg' class='control-label'>Current Image</label><p class='form-control'>No Image</p>";
        } else {
          $imgSrc = $row["imgSrc"];
          $output["curImg"] = "<label for='curImg' class='control-label'>Current Image</label><img src='../img/$imgSrc' id='curImg' class='img-responsive'>";
        }
    }
}


echo json_encode($output);

mysqli_close($conn);
?>
