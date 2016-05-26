<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
    <title>Games | Game Development Club | Santa Susana High School</title>
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
              <div class="section-title">Games</div>
              <p>This page contains all the information to download Game Dev Club Games. This page is also for resources for the developers.</p>
              <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <h2>Pong</h2>
                    <img src="./images/content/games/pong.png" alt="Pong" class="img-responsive"/>
                    <h3>Description</h3>
                    <p>This is a remake of the classic game made by Atari in 1972. In Pong, you play tennis against the computer. As the ball bounces off of the paddles and the screen, the ball speeds up.</p>
                    <h3>For Developers</h3>
                    <p><a href="./gamefiles/pong_assets.zip">Download the assets here</a></p>
                    <p><a href="https://github.com/JoseRivas1998/pongfall2014" target="_blank">GitHub Repository (Source Code)</a></p>
                    <p><a href="./tutorials.php?pl=3">Programming Tutorial</a></p>
                    <h3>For Everyone</h3>
                    <p><a href="./gamefiles/Pong.jar">Download the Game Here!</a></p>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <h2>Space Invaders <small>Fall 2015</small></h2>
                    <img src="images/content/games/spaceinvaders.png" alt="Space Invaders" class="img-responsive" />
                    <h3>Description</h3>
                    <p>This is a remake of the classic game made by Taito in 1978. In Space Invaders, an armada of aliens is attacking and a space ship must defeat them.</p>
                    <h3>For Developers</h3>
                    <p><a href="./gamefiles/space_invaders_assets.zip">Download the assets here</a></p>
                    <p><a href="https://github.com/Santa-Susana-Game-Development-Club/Space-Invaders" target="_blank">GitHub Repository (Source Code)</a></p>
                    <p><a href="./tutorials.php?pl=4">Programming Tutorial</a></p>
                    <h3>For Everyone</h3>
                    <p><a href="./gamefiles/Space Invaders.jar">Download the Game Here!</a></p>
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
