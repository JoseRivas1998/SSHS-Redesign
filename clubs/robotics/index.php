<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
    <title>Robotics Club | Santa Susana High School</title>
    <style>
        .img-responsive {
            margin: auto;
        }

        #sponsors > * {
            padding-top: 5px;
            padding-bottom: 5px;
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
            $path = $_SERVER["DOCUMENT_ROOT"];
            $path .= "/clubs/robotics/left-nav.php";
            include($path);
            ?>
            <div class="col-xs-12 col-sm-9">
                <div class="section-title">Welcome to the SSHS Vex Robotics Club</div>
                <img src="vex-logo.jpg" alt="VEX Robotics" class="img-responsive">
                <h3>We Are Robotics!</h3>
                <p>
                    We meet every Tuesday and Thursday, after school from 3:00 - 4:30. Come join us in Room 101 (the
                    computer lab) to make robots do cool things. This is a club to learn new concepts about robotics and
                    engineering, compete with other schools, and ultimately to have fun!
                </p>
                <h3>Our Sponsors</h3>
                <div class="row" id="sponsors">
                    <div class="col-xs-12">
                        <img src="sponsors.png" alt="Our Sponsors" class="img-responsive">
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <img src="logo_CACT.png" alt="CACT" class="img-responsive">
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <img src="logo_DWM.png" alt="Doing What Matters" class="img-responsive">
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
