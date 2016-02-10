<?php
$root = $_SERVER["DOCUMENT_ROOT"];

include($root . "/inc/dbConnect.php");

$teacherId = $_POST["teacherId"];

$sql = "SELECT * FROM teachers WHERE id = $teacherId LIMIT 1";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $output = array();
      $output["resFirstName"] = $row["firstName"];
      $output["resLastName"] = $row["lastName"];
      $output["resEmail"] = $row["email"];
      if($row["imgPath"]) {
        $output["resImg"] = "../img/" . $row["imgPath"];
      } else {
        $output["resImg"] = "../img/pending_staff.png";
      }
      $output["resFChair"] = $row["foundingChair"];
      $output["resDChair"] = $row["departmentChair"];
      $output["resAChair"] = $row["academyChair"];
      $output["resAcad"] = $row["academy"];
      $output["resClass1"] = $row["class1"];
      if($row["class2"]) {
        $output["resClass2"] = $row["class2"];;
      } else {
        $output["resClass2"] = "";
      }
      if($row["class3"]) {
        $output["resClass3"] = $row["class3"];;
      } else {
        $output["resClass3"] = "";
      }
      if($row["class4"]) {
        $output["resClass4"] = $row["class4"];;
      } else {
        $output["resClass4"] = "";
      }
      if($row["class5"]) {
        $output["resClass5"] = $row["class5"];;
      } else {
        $output["resClass5"] = "";
      }
      if($row["class6"]) {
        $output["resClass6"] = $row["class6"];;
      } else {
        $output["resClass6"] = "";
      }
      if($row["class7"]) {
        $output["resClass7"] = $row["class7"];;
      } else {
        $output["resClass7"] = "";
      }
      if($row["link1"]) {
        $output["resLink1href"] = $row["link1"];
      } else {
        $output["resLink1href"] = "";
      }
      if($row["link1Text"]) {
        $output["resLink1Text"] = $row["link1Text"];
      } else {
        $output["resLink1Text"] = "";
      }
      if($row["link2"]) {
        $output["resLink2href"] = $row["link2"];
      } else {
        $output["resLink2href"] = "";
      }
      if($row["link2Text"]) {
        $output["resLink2Text"] = $row["link2Text"];
      } else {
        $output["resLink2Text"] = "";
      }
      if($row["link3"]) {
        $output["resLink3href"] = $row["link3"];
      } else {
        $output["resLink3href"] = "";
      }
      if($row["link3Text"]) {
        $output["resLink3Text"] = $row["link3Text"];
      } else {
        $output["resLink3Text"] = "";
      }
    }
}

echo json_encode($output);

mysqli_close($conn);

?>
