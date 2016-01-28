<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
    <title>Registration | Santa Susana High School</title>
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
                <div class="section-title">Registration Documents</div>
                <div class="list-group">
                    <a href="downloads/2015-16_middleschoolreg.ppsx" class="list-group-item" target="_blank">Incoming
                        9th Grade Registration Presentation</a>
                    <a href="downloads/2015-16_inhousereg.ppsx" class="list-group-item" target="_blank">In-House
                        Registration Presentation (Sophomores, Juniors, Seniors)</a>
                </div>
                <h3>Important Registration Documents</h3>
                <div class="list-group">
                    <a href="downloads/2015-16_registrationguide.pdf" class="list-group-item" target="_blank">Registration
                        Guide</a>
                    <a href="downloads/Grad_vs_A-G.pdf" class="list-group-item" target="_blank">Graduation/'A-G'
                        Requirements</a>
                    <a href="downloads/2015-16_A-G_list.pdf" class="list-group-item" target="_blank">'A-G' Approved List
                        of Courses</a>
                    <a href="downloads/2015-16_mathsciflowchart.pdf" class="list-group-item" target="_blank">Math &amp;
                        Science Flow Charts</a>
                    <a href="/resources/content/schoolandacademy/structure.pdf" class="list-group-item" target="_blank">Schools
                        &amp; Academies Poster</a>
                    <a href="downloads/2015-16_APHonorscontract.pdf" class="list-group-item" target="_blank">AP/Honors
                        Contract</a>
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
