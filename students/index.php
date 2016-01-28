<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
    <title>Students | Santa Susana High School</title>
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
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section-title">General Info</div>
                    </div>
                    <div class="col-xs-5">
                        <img src="studentsworking.png" alt="Students Working" class="img-responsive" id="studentsImg">
                    </div>
                    <div class="col-xs-7">
                        <p>Welcome to the Student Info Page</p>
                        <p>
                            Here you can find Student Information for all students, the Library, all of the resources
                            for Seniors, and links to Counseling, Leadership, and the district's Discipline Policy.
                        </p>
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
