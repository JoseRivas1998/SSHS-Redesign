<?php

function getHomeLinks($section) {
  include ($_SERVER["DOCUMENT_ROOT"] . "/inc/dbConnect.php");

  $sql = "SELECT * FROM homePage WHERE section = '$section' ORDER BY dateLastUpdated";

  $result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      $linkText = $row["linkText"];
      $linkHref = $row["linkHref"];
      $icon = $row["icon"];
      if(strpos($linkHref, '.pdf')) {
        echo "<a href='$linkHref' class='list-group-item' target='_blank'><i class='fa fa-$icon fa-fw'></i> <span class='list-text'>$linkText</span></a>";
      } else if(substr($linkHref,0,4) == 'http') {
        echo "<a href='$linkHref' class='list-group-item' target='_blank'><i class='fa fa-$icon fa-fw'></i> <span class='list-text'>$linkText</span></a>";
      } else {
        echo "<a href='$linkHref' class='list-group-item'><i class='fa fa-$icon fa-fw'></i> <span class='list-text'>$linkText</span></a>";
      }
    }
  }

  mysqli_close($conn);
}

?>
