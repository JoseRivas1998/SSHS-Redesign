<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
    <title>Principal's Message | Santa Susana High School</title>
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
            <div class="col-xs-12">

<?php

$root = $_SERVER["DOCUMENT_ROOT"];

include($root . "/inc/dbConnect.php");

$sql = "SELECT * FROM principalMessage WHERE publishDate < CURRENT_DATE() ORDER BY publishDate DESC LIMIT 1";

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

                <p><a href="archivedPrincipalsMessages/">Archived Principal's Messages</a></p>

            </div>
        </div>
    </div>
</section>

<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/inc/javascript.php";
include($path);
?>
</body>

</html>
