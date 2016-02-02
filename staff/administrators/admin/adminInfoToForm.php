<?php
$root = $_SERVER["DOCUMENT_ROOT"];

include($root . "/inc/dbConnect.php");

$adminId = $_POST["adminId"];

$sql = "SELECT * FROM administrators WHERE id = $adminId LIMIT 1";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    $output = array();
    $output["resFirstName"] = $row["firstName"];
    $output["resLastName"] = $row["lastName"];
    $output["resEmail"] = $row["email"];
    $output["resRole"] = $row["role"];
    $output["resOrderNum"] = (int) $row["sortingNumber"];
    if($row["imgPath"]) {
      $output["resImgSrc"] = "../img/" . $row["imgPath"];
    } else {
      $output["resImgSrc"] = "../img/pending_staff.png";
    }
    if($row["link1"]) {
      $output["resLink"] = $row["link1"];
    } else {
      $output["resLink"] = "";
    }
    if($row["link1Text"]) {
      $output["resLinkText"] = $row["link1Text"];
    } else {
      $output["resLinkText"] = "";
    }
  }
}

mysqli_close($conn);

echo json_encode($output);

?>
