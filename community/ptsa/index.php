<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
    <title>PTSA | Santa Susana High School</title>
    <style>
        .img-responsive {
            margin: auto;
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
            $path .= "/community/left-nav.php";
            include($path);
            ?>
            <div class="col-xs-12 col-sm-9">
                <div class="section-title">PTSA</div>
                <h3>The current 2015-2016 PTSA Officers are as follows -</h3>
                <strong>President:</strong> Laurie Hoffman<br>
                <strong>1st Vice President/Programs:</strong> Kayla Hoffman<br>
                <strong>2nd Vice President/Ways and Means:</strong> Debby Lieber<br>
                <strong>Secretary:</strong> Erin Garrett<br>
                <strong>Treasurer:</strong> Caren Langley<br>
                <strong>Auditor:</strong> Jim Schlaffer<br>
                <strong>Historian:</strong> Natasha Schlaffer<br><br>
                <p>
                    We invite you to join <strong>P</strong>arent <strong>T</strong>eacher <strong>S</strong>tudent
                    <strong>A</strong>ssociation (PTSA) to help support programs, events, and activities that the PTSA
                    provides for the school. Membership also gives you a voice and vote.
                </p>
                <img src="img/child.png" alt="Child" class="img-responsive">
                <p>
                    The mission of the California State PTA is to positively impact the lives of all children and
                    families. The deadline for entries to be at school is October 9th.
                </p>
                <p>Below are examples of the programs that PTSA sponsors.</p>
                <p>Your membership makes a difference in your high school student's education.</p>
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title">Membership Application</div>
                            </div>
                            <div class="panel-body"><a href="downloads/Membership_Letter_2015-16.pdf"
                                                       target="_blank"><img src="img/Membership_Letter_2015-16.png"
                                                                            alt="Membership Application"
                                                                            class="img-responsive"></a></div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title">No Frills Fundraiser</div>
                            </div>
                            <div class="panel-body"><a
                                    href="downloads/No_Frills_Fundraiser_Flyer_and_label_July_2015.pdf" target="_blank"><img
                                        src="img/No_Frills_Fundraiser_Flyer_and_label_July_2015_icon.png"
                                        alt="No Frills Fundraiser" class="img-responsive"></a></div>
                        </div>
                    </div>
                </div>
                <h3>Programs that PTSA supports:</h3>
                <ul>
                    <li><strong>College Scholarships</strong> (Seniors applying for scholarships MUST be a member of
                        PTSA to be eligible)
                    </li>
                    <li><strong>Practice SAT and ACT Exams</strong> All students are invited to participate!</li>
                    <li><strong>Testing Support</strong></li>
                    <li><strong>School Beautification</strong></li>
                    <li><strong>Distinguished Speaker Series</strong></li>
                    <li><strong>Red Ribbon Week and Blood Drive</strong></li>
                    <li><strong>Staff Appreciation</strong></li>
                    <li><strong>Reflections Program</strong></li>
                    <li><strong>Triumphant Troubadour Awards</strong></li>
                    <li><strong>Advocate for Students and Teachers at the CA State Level</strong></li>
                    <li><strong>Volunteer Opportunities</strong></li>
                </ul>

                <p>
                    Membership cost is only <strong>$6.00</strong> per member! All parents and family members, students,
                    teachers and staff are encouraged to join. There is no limit to how many friends and family you
                    bring in to support our school.
                <p>
                <p>
                    Fill out the <a href="downloads/Membership_Letter_2015-16.pdf" target="_blank">attached form</a> and
                    return it to school with cash or checks (made out to SSHS PTSA), along with the names of every
                    member.<br><br> Gail Sarkisian
                </p>

                To see the California PTA Page, click <a href="http://www.capta.org/" target="_blank">here</a>.<br>
                To see the National PTA Page, click <a href="http://www.pta.org/" target="_blank">here</a>.
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
