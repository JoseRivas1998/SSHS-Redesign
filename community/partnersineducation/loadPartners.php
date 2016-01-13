<?php

$incPath = $_SERVER['DOCUMENT_ROOT'];
$incPath .= "/inc/dbConnect.php";
include($incPath);

$sql = "SELECT * FROM partnersInEducation ORDER BY orderNum";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
  $index = 0;
	while($row = mysqli_fetch_assoc($result)) {
    $name = $row["partner"];
    $imgPath = $row["imgSrc"];
    $website = $row["website"];
    $nullImg = is_null($imgPath);
    $openRow = ($index == 0);
    $closeRow = ($index == 3);
    if($openRow) {
      echo "<div class='row partnerRow'>";
    }
    echo "<div class='col-xs-12 col-sm-3 partner'>";
    if($nullImg) {
      echo "<div class='noImg'></div>";
    } else {
      echo "<img src='img/$imgPath' alt='$name' class='img-responsive'>";
    }
    echo "<a href='$website' target='_blank'>$name</a>";
    echo "</div>";
    $index++;
    if($closeRow) {
      echo "</div>";
      $index = 0;
    }
	}
  if($index >= 0 && $index < 3) {
    echo "</div>";
  }
}

mysqli_close($conn);

?>
<script>
$(".img-responsive").each(function() {
    $(this).height($(".img-responsive").first().height());
});
$("div div.noImg").each(function() {
  $(this).height($(".img-responsive").first().height());
  $(this).width($(".img-responsive").first().width());
});
</script>
