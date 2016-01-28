<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
    <title>Go Ahead/Credit Recovery | Santa Susana High School</title>
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
                <div class="section-title">Go Ahead/Credit Recovery</div>
                <div class="list-group">
                    <a href="downloads/CreditRecoveryOptions2015.pdf" class="list-group-item" target="_blank">Go
                        Ahead/Credit Recovery Options</a>
                    <a href="downloads/CreditRecoveryPermission2014.pdf" class="list-group-item" target="_blank">Go
                        Ahead/Credit Recovery Permission Form</a>
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
