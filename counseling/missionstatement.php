<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
    <title>Mission Statement | Santa Susana High School</title>
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
                <div class="section-title">Mission Statement</div>
                <h3>We believe:</h3>
                <ul>
                    <li>all students have the ability to learn and achieve</li>
                    <li>all students have a right to learn in a safe and supportive environment</li>
                    <li>
                        all students have the right to be treated with dignity, respected for their unique individuality
                        and recognized for their personal strengths
                    </li>
                    <li>
                        all students have the right to a quality, rigorous and relevant education that prepares them for
                        the future
                    </li>
                    <li>
                        all students have a right to activities that support academic, career and personal/social growth
                        and development
                    </li>
                    <li>
                        all students belong to a school system where the entire school community contributes to help
                        students succeed
                    </li>
                    <li>
                        all students have a right to activities that support academic, career and personal/social growth
                        and development
                    </li>
                    <li>
                        all students have the right to a quality, comprehensive school counseling program based on the
                        ASCA National Model©
                    </li>
                </ul>
                <h3>And that our school counseling program:</h3>
                <ul>
                    <li>
                        advocates for every student
                    </li>
                    <li>
                        is comprehensive in scope, proactive in design, developmental in nature, and supportive in
                        spirit
                    </li>
                    <li>
                        is an integral part of a total educational program for student success
                    </li>
                    <li>
                        selects measurable student competencies based on local need in the areas of academic, career,
                        and personal/social development of all students in a diverse society
                    </li>
                    <li>
                        has a delivery system that includes school guidance curriculum, individual planning, responsive
                        services, and system support
                    </li>
                    <li>
                        is implemented by a P.P.S. credentialed school counselor
                    </li>
                    <li>
                        is conducted in collaboration with the school community
                    </li>
                    <li>
                        uses data to drive program decisions and delivery
                    </li>
                    <li>
                        monitors student progress
                    </li>
                    <li>
                        measures and shares both process and outcome results and analyzes critical data elements
                    </li>
                    <li>
                        seeks improvement each year based on results data
                    </li>
                    <li>
                        celebrates successes!
                    </li>
                </ul>
                <h3>And that all school counselors will:</h3>
                <ul>
                    <li>
                        design, implement, and evaluate the comprehensive school counseling program in collaboration
                        with administration
                    </li>
                    <li>
                        abide by the professional school counseling ethics as advocated by the American School
                        Counseling Association
                    </li>
                    <li>
                        participate in professional development activities essential to maintaining a quality school
                        counseling program
                    </li>
                </ul>
                <p>
                    The mission of Santa Susana High School's Counseling program, in its commitment to excellence, is to
                    support quality education by ensuring ALL students acquire the knowledge, attitudes and skills in
                    academic, career and personal/social development necessary to succeed in a changing world.
                </p>
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
