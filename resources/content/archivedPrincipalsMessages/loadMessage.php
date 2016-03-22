<?php

$root = $_SERVER["DOCUMENT_ROOT"];

include($root . "/inc/dbConnect.php");

$id = $_GET["id"];

$sql = "SELECT * FROM principalMessage WHERE id = $id";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class='section-title'>Principal " . $row["principalName"] . ", " . substr($row["publishDate"], 0, 4) . "</div>";
    echo $row["publishDate"];
    echo $row["message"];
    echo "<p>Sincerely,</p>";
    echo "<p><i>" . $row["principalName"] . "</i></p>";
  }
}

mysqli_close($conn);


?>


<p id="principal">
    Principal
</p>

<p><a href="">Archived Principal's Messages</a></p>
