<?php

$root = $_SERVER['DOCUMENT_ROOT'];

include($root . '/inc/dbConnect.php');

$sql = "SELECT * FROM fullPages ORDER BY `path`";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
  $index = 0;
  while($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $title = $row['title'];
    $path = $row['path'];
    echo "<option value=\"$id\"";
    if($index == 0) {
      echo " selected";
    }
    echo ">$title | $path</option>";
    $index++;
  }
}

mysqli_close($conn);

?>
