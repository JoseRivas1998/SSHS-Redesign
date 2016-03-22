<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
    <title>Student Info | Santa Susana High School</title>
    <style type="text/css">
        ul {
            padding-left: 25%;
        }

        ul > li {
            list-style-type: none;
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
            <div class="col-sm-9 col-xs-12" id="studentInfo">
                <div class="section-title">Student Info</div>
                <div class="col-xs-6">
                    <div class="list-group">
                        <a href="https://awps.simivalleyusd.org/aeries.net/" target="_blank" class="list-group-item">Aeries
                            Website</a>
                        <a href="/resources/downloads/parkingpermit.pdf" class="list-group-item">Student Parking
                            Permit</a>
                        <a href="/community/communityresources/" class="list-group-item">Community Resources</a>
                        <a href="/resources/content/bellschedule.php" class="list-group-item">Bell Schedule</a>
                        <a href="/resources/content/schoolandacademy/" class="list-group-item">School &amp; Academy
                            Structure</a>
                        <a href="/students/tap.php" class="list-group-item">TAP</a>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="list-group">
                        <a href="http://www.cte.santasusana.org/" class="list-group-item">CTE Information</a>
                        <a href="/clubs/" class="list-group-item">Clubs</a>
                        <a href="http://webstores.activenetwork.com/school-software/santa_susana_high_sc/"
                           target="_blank" class="list-group-item">Student Store</a>
                        <a href="/resources/downloads/verbaladvantage.pdf" class="list-group-item" target="_blank">Verbal
                            Advantage</a>
                        <a href="http://sshsauditions.weebly.com/" class="list-group-item" target="_blank">Performing
                            Arts Auditions</a>
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
