<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
    <title>Staff | Santa Susana High School</title>
    <style>
        #staffPic {
            margin: auto;
        }

        #staffPicRow {
            padding-bottom: 20px;
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
            <div class="col-xs-12 col-sm-3 side-nav">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">Staff</div>
                    </div>
                    <div class="panel-body">
                        <div class="list-group">
                          <?php
                            include_once($_SERVER['DOCUMENT_ROOT'] . '/inc/sideNav.php');
                            loadSideNav('staff');
                          ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-9">
                <div class="section-title">General Info</div>
                <div class="row" id="staffPicRow">
                    <div class="col-xs-12">
                        <a href="Staff_Picture_20142015_1800px_high_1.5MG.jpg" target="_blank"><img
                                src="Staff_Picture_20142015_225px_high.jpg" alt="Santa Susana Staff"
                                class="img-responsive" id="staffPic"></a>
                    </div>
                </div>
                <div class="col-xs-5">
                    <img src="teacher.jpg" alt="Lapin Helping Students" class="img-responsive">
                </div>
                <div class="col-xs-7">
                    <strong>Welcome to the Staff Info Page.</strong>
                    <div class="list-group">
                        <a href="teachers/" class="list-group-item">Teachers</a>
                        <a href="administrators/" class="list-group-item">Administrators</a>
                        <a href="supportstaff" class="list-group-item">Support Staff</a>
                        <a href="linksforteachers/" class="list-group-item">Links for Teachers</a>
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
