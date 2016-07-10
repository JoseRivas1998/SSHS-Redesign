<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
    <title>Leadership | Santa Susana High School</title>
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
                        <div class="section-title">Leadership</div>
                        <div class="list-group">
                            <a href="https://docs.google.com/forms/d/1EiIzGU-eLTG9RKoz5xqxQuBDFFC73pMldCv_aeB5968/viewform"
                               class="list-group-item" target="_blank">Returning Leadership/ASB Student Application</a>
                            <a href="https://docs.google.com/forms/d/16dGVoxe_MMNhlc200wdWHe14-w74sA6A9VRay_lDYZY/viewform"
                               class="list-group-item" target="_blank">New Leadership/ASB Student Application</a>
                            <a href="https://docs.google.com/forms/d/1of6PHhQuXU0yRWwDCUCFELnSNg_kKpzea0s09FexCmw/viewform"
                               class="list-group-item" target="_blank">Petition for Candidacy (Elected Office)</a>
                            <a href="https://docs.google.com/a/simivalleyusd.org/document/d/1nKBJR42T9sZsrcRO6AVjglAUzlWaItmzrbNmJRkDYVU/edit?usp=sharing"
                               class="list-group-item" target="_blank">Verification Form (for all new applications to
                                Leadership/ASB)</a>
                            <a href="https://docs.google.com/a/simivalleyusd.org/forms/d/19YzYpv3CLZduSRH35OsVUJNvm2eRz_VFxlmHON0Zrg0/viewform"
                               class="list-group-item" target="_blank">Teacher Evaluation of New Applicant</a>
                            <a href="https://docs.google.com/forms/d/1CpRLzxjIlx1ftnCck1V7hL7L7fzXIgmSqiZ1PysKDGA/viewform"
                               class="list-group-item" target="_blank">Publicity Request Form</a>
                        </div>
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
