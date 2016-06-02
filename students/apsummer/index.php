<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
    <title>AP / Honors Summer Work | Santa Susana High School</title>
    <style>
      .assignment {
        text-align: center;
      }
      .assignment > a > .img-responsive {
        max-width: 50%;
        margin: 0 auto;
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
            <?php
              include($_SERVER["DOCUMENT_ROOT"] . "/students/left-nav.php");
            ?>
            <div class="col-xs-12 col-sm-9">
              <div class="section-title">AP / Honors Summer Work</div>
              <div class="row">
                <?php
                include('calcab.php');
                include('eng12.php');
                ?>
              </div>
              <div class="row">
                <?php
                include('apush.php');
                include('apchem.php')
                ?>
              </div>
              <div class="row">
                <?php include('eng10.php') ?>
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
</body>

</html>
