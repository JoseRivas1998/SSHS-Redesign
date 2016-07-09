<?php

$root = $_SERVER['DOCUMENT_ROOT'];

include($root . '/inc/dbConnect.php');

$output = array();

$id = $_POST['id'];

$sql = "SELECT * FROM fullPages WHERE id = $id LIMIT 1";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    $output['title'] = $row['title'];
    $output['path'] = $row['path'];
    $output['content'] = $row['content'];
    if(is_null($row['sidenav'])) {
      $output['sidenav'] = 0;
    } else {
      $output['sidenav'] = $row['sidenav'];
    }
  }
}

echo json_encode($output);

mysqli_close($conn);

?>
