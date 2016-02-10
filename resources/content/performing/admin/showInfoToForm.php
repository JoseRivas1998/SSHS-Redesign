<?php
$root = $_SERVER["DOCUMENT_ROOT"];

include($root . "/inc/dbConnect.php");

include("format.php");

$showId = $_POST["showId"];

$sql = "SELECT * FROM performances WHERE id = $showId LIMIT 1";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $output = array();
    $output["resTitle"] = $row["title"];
    if($row["posterPath"]) {
      $output["resPoster"] = "../" . $row["posterPath"];
    } else {
      $output["resPoster"] = "../na.png";
    }
    $output["resShow1"] = $row["firstShow"];
    $output["resShow1"] = formatTimeToHtml($output["resShow1"]);
    $output["resTicket1"] = $row["ticket1"];
    if($row["secondShow"]) {
      $output["resShow2"] = $row["secondShow"];
      $output["resShow2"] = formatTimeToHtml($output["resShow2"]);
    } else {
      $output["resShow2"] = "";
    }
    if($row["thirdShow"]) {
      $output["resShow3"] = $row["thirdShow"];
      $output["resShow3"] = formatTimeToHtml($output["resShow3"]);
    } else {
      $output["resShow3"] = "";
    }
    if($row["fourthShow"]) {
      $output["resShow4"] = $row["fourthShow"];
      $output["resShow4"] = formatTimeToHtml($output["resShow4"]);
    } else {
      $output["resShow4"] = "";
    }
    if($row["fithShow"]) {
      $output["resShow5"] = $row["fithShow"];
      $output["resShow5"] = formatTimeToHtml($output["resShow5"]);
    } else {
      $output["resShow5"] = "";
    }
    if($row["sixthShow"]) {
      $output["resShow6"] = $row["sixthShow"];
      $output["resShow6"] = formatTimeToHtml($output["resShow6"]);
    } else {
      $output["resShow6"] = "";
    }
    if($row["ticket2"]) {
      $output["resTicket2"] = $row["ticket2"];
    } else {
      $output["resTicket2"] = "";
    }
    if($row["ticket3"]) {
      $output["resTicket3"] = $row["ticket3"];
    } else {
      $output["resTicket3"] = "";
    }
    if($row["ticket4"]) {
      $output["resTicket4"] = $row["ticket4"];
    } else {
      $output["resTicket4"] = "";
    }
    if($row["location"]) {
      $output["resLocation"] = $row["location"];
    } else {
      $output["location"] = "";
    }
  }
}

echo json_encode($output);

mysqli_close($conn);

?>
