<?php
$root = $_SERVER["DOCUMENT_ROOT"];

include($root . "/inc/dbConnect.php");

$seriesId = $_POST["seriesId"];

$sql = "SELECT * FROM speakerseries WHERE id = $seriesId LIMIT 1";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $output = array();
    $output["resTitle"] = $row["title"];
    $output["resDate"] = $row["showDate"];
    $output["resDate"] = substr($output["resDate"], 0, strpos($output["resDate"], " ")) . "T" . substr($output["resDate"], strpos($output["resDate"], " ") + 1);
    $output["resLocation"] = $row["location"];
    $output["resPosterThumb"] = "../" . $row["posterThumb"];
    $output["resPosterLarge"] = "../" . $row["posterLarge"];
    if($row["infoThumb"]) {
      $output["resInfoThumb"] = "../" . $row["infoThumb"];
    } else {
      $output["resInfoThumb"] = "";
    }
    if($row["infoLarge"]) {
      $output["resInfoLarge"] = "../" . $row["infoLarge"];
    } else {
      $output["resInfoLarge"] = "";
    }
  }
}

echo json_encode($output);

mysqli_close($conn);

?>
