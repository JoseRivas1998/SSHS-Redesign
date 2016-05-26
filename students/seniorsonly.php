<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
    <title>Senriors Only | Santa Susana High School</title>
    <style>
        #studentsImg {
            width: 95%;
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
            <div class="col-sm-9 col-xs-12">
                <div class="col-xs-12">
                    <div class="section-title">Seniors Only</div>
                </div>
                <div class="col-xs-12">
                    <div class="list-group">
                      <a href="http://tiny.cc/sshssrproj2017" class="list-group-item" target="_blank"><strong>Senior Project 2016-2017 Form</strong></a>
                      <a href="/resources/downloads/Certification.Application.rev3.pdf" class="list-group-item" target="_blank">Certification Application</a>
                        <a href="/resources/downloads/Senior.Newsletter.2016.pdf" class="list-group-item">Class of 2016 Senior Newsletter</a>
                        <a href="/senior-project/" class="list-group-item">Senior Project</a>
                        <a href="/resources/downloads/gradcontract2015.pdf" class="list-group-item">Graduation Contract
                            (2015)</a>
                        <a href="http://www.jostens.com/" class="list-group-item">Jostens</a>
                        <a href="https://docs.google.com/forms/d/1v-9dLw1utULC_JLMBB3b0Eftod37pyvePe2p9jRh3X8/viewform"
                           class="list-group-item">Class of 2015 Senior Survey</a>
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
