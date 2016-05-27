<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
    <title>AP / Honors Summer Work | Santa Susana High School</title>
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
                <div class="col-xs-12 col-sm-6">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <div class="panel-title">Mr. Reinstein - AP Calculus AB</div>
                    </div>
                    <div class="panel-body">
                      <div class="list-group">
                        <a href="./AP.CALCULUS.AB.summer.assignment.docx" class="list-group-item">Summer Assignment</a>
                      </div>
                    </div>
                  </div>
                </div>
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
