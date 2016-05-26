<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
    <title>Tutorials | Game Development Club | Santa Susana High School</title>
    <style>
        #pl2, #pl3, #pl4, #pl5, #pl6 {
            display: none;
        }
        .tab-link:hover {
            cursor: pointer;
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
              include('left-nav.php');
            ?>
            <div class="col-xs-12 col-sm-9">
              <div class="section-title">Tutorials</div>
                <div class="col-xs-12">
                    <ul class="nav nav-tabs nav-justified" id="navTabs">
                      <li role="presentation" class="active" id="t1"><a class="tab-link">Full Programming Tutorial</a></li>
                      <li role="presentation" id="t2"><a class="tab-link">Intro To Programming</a></li>
                      <li role="presentation" id="t3"><a class="tab-link">Pong</a></li>
                      <li role="presentation" id="t4"><a class="tab-link">Space Invaders</a></li>
                      <li role="presentation" id="t5"><a class="tab-link">Intermediate Java</a></li>
                      <li role="presentation" id="t6"><a class="tab-link">Code Lapse</a></li>
                    </ul>
                    <section>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe  id="playList" class="embed-responsive-item" src="//www.youtube.com/embed/videoseries?list=PLXGqUKNYJYkiqqE0fTuOGg0BLX920aMs7" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </section>
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
<script src="tutorials.js"></script>
</body>

</html>
