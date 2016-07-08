<?php

function loadSideNav($category) {
  $root = $_SERVER['DOCUMENT_ROOT'];
  include($root . '/inc/dbConnect.php');

  $sql = "SELECT * FROM navigation WHERE category = '$category' LIMIT 1";
  $result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      $jsonobj = $row['jsonobj'];
      $json = json_decode($jsonobj);
      for($i = 0; $i < count($json); $i++) {
        $title = $json[$i]->{'title'};
        $path = $json[$i]->{'path'};
        echo "<a href=\"$path\" class=\"list-group-item\">$title</a>";
      }
    }
  }
  mysqli_close($conn);
}

?>
