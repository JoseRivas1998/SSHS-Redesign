<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
    <title>Archived Principal's Messages | Santa Susana High School</title>
    <style>
        p {
            padding-top: 10px;
            text-indent: 25px;
        }

        #principal {
            padding-top: 0;
        }
    </style>
</head>

<body>
<header>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/topnavbar.php";
    include($path);
    ?>
</header>

<section id="content-wrapper">
    <div class="container" id="content-container">
        <div class="row">
            <div class="col-xs-12" id="messageBody">
                <div class="section-title">Archived Principal's Messages</div>
                <div class="list-group">
                    <a href="../principalmessage.php" class="list-group-item">Current Principal Message</a>
<?php

$root = $_SERVER["DOCUMENT_ROOT"];

include($root . "/inc/dbConnect.php");

$dateFormat = "DATE_FORMAT(publishDate,'%Y-%M')";

$sql = "SELECT id, publishDate, principalName, $dateFormat FROM principalMessage WHERE publishDate < CURRENT_DATE() ORDER BY publishDate DESC LIMIT 50 OFFSET 1";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    $pName = $row["principalName"];
    $id = $row["id"];
    $date = $row[$dateFormat];
    echo "<a href='javascript:void(0)' class='list-group-item' onclick='loadMessage($id);'>Principal's Message-$date-$pName</a>";
  }
}

mysqli_close($conn);


?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/inc/javascript.php";
include($path);
?>
<script>
  function loadMessage(id) {
    $.ajax({
      type: "GET",
      url: "loadMessage.php",
      data: {
        "id": id
      },
      cache: false,
      success: function(data) {
        $("#messageBody").html(data);
      }
    });
  }
</script>
</body>

</html>
