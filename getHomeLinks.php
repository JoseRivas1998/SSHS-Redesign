<?php

function getHomeLinks($section) {
  include ($_SERVER["DOCUMENT_ROOT"] . "/inc/dbConnect.php");

  $sql = "SELECT * FROM homePage WHERE section = '$section' ORDER BY dateLastUpdated desc";

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

function getNewHomeLinks($section) {
  include ($_SERVER["DOCUMENT_ROOT"] . "/inc/dbConnect.php");

  $sql = "SELECT * FROM homePage WHERE section = '$section' ORDER BY dateLastUpdated desc";

  $result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($result) > 0) {
    $index = 0;
    while($row = mysqli_fetch_assoc($result)) {
      $linkText = $row["linkText"];
      $linkHref = $row["linkHref"];
      $icon = $row["icon"];
      $blankT = false;
      if(strpos($linkHref, '.pdf')) {
        $blankT = true;
      } else if(substr($linkHref,0,4) == 'http') {
        $blankT = true;
      }
      echo "<div class='col-xs-12 col-sm-6 col-md-4'>";
      echo "<a href='$linkHref'";
      if($blankT) {
        echo " target='_blank'";
      }
      echo ">";
      echo "<div class='row homeLink'>";
      echo "<div class='col-xs-5'>";
      echo "<i class='fa fa-$icon fa-5x fa-fw'></i>";
      echo "</div>";
      echo "<div class='col-xs-7'>";
      echo "<strong>$linkText</strong>";
      echo "</div>";
      echo "</div>";
      echo "</a>";
      echo "</div>";
    }
  }

  mysqli_close($conn);
}

?>
