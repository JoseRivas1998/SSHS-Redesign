<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
    <title>Community Resources | Santa Susana High School</title>
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
            $path .= "/community/left-nav.php";
            include($path);
            ?>
            <div class="col-xs-12 col-sm-9">
                <div class="section-title">Community Resources</div>
                <h3>Teen Crisis Resources Numbers</h3>
                <i>The following numbers were provided by the Simi Valley Youth Council and are located on the back of
                    every student I.D. card</i><br><br>
                <strong>2-1-1 Helpline</strong> (All Issues)211 (24 hrs)<br>
                <strong>Action</strong> (All Issues)800 FOR-TEEN (24 hrs)<br>
                <strong> Teen Line</strong> (All Issues)800 TLC-TEEN (Evenings)<br>
                <strong> Free Clinic</strong> (Medical, Legal, Counseling)805-522-3733 (Evenings)<br>
                <strong> Poison Control Center </strong>(Overdose)800-222-1222 (24hrs)<br>
                <strong> Public Health</strong> (Medical Services)805-578-3675 (Days)<br>
                <strong> Runaway Hotline</strong> (Runaway)800-621-4000 (24 hrs)<br>
                <strong>TARP</strong> (Counseling and Referral)805-583-6765(Days)<br><br>

                <strong>Interface Children Family Services.</strong> Strengthening our children, families and
                communities to be safe, healthy and thriving.<br>
                <strong>Interface</strong> (Counseling and Referral) 800-339-9597(Days)<br>
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
