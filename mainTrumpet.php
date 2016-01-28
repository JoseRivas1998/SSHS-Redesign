<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
    <title>Troubadour Trumpeter | Santa Susana High School</title>
    <style>
        .trumpetTitleImg {
            margin: 0 auto;
            max-height: 400px;
            padding-bottom: 10px;
        }

        p {
            text-indent: 50px;
        }

        h3 {
            text-align: center;
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
            <div class="col-xs-12">
                <div class="section-title">Troubadour Trumpeter</div>
            </div>
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">

                <h3 id="socalhomes">Article on Santa Susana High School from Southern California Homes</h3>
                <a href="http://www.southerncaliforniahomes.com/articles/local-high-school-offers-students-a-jump-on-career-education"
                   target="_blank"><img src="img/content/trumpeter/southern-calif-homes-article-icon.png"
                                        alt="Article on Santa Susana High School from Southern California Homes"
                                        class="img-responsive trumpetTitleImg"></a>

                <h3 id="mexpresfox">Former Mexican President Vicente Fox</h3>
                <img src="img/content/trumpeter/mexpresfox.jpg" alt="Former Mexican President Vicente Fox"
                     class="img-responsive trumpetTitleImg">
                <p>
                    Thank you to Vicente Fox, former president of Mexico, and Martha Sahag&uacute;n, for coming to Santa
                    Susana High School and inspiring many minds to lead the way into the future and "change the world!"
                </p>

                <h3 id="Mock-Trial">Mock Trial goes to World Championships</h3>
                <img src="img/content/trumpeter/mocktrial.jpg" alt="Mock Trial goes to World Championships"
                     class="img-responsive trumpetTitleImg">
                <p>
                    On October 21, the Santa Susana mock trial team will fly to New York City to compete in the
                    international Empire Mock Trial competition. At the annual Empire competition, high school teams
                    from all around the world come together to go head-to-head on a college-level mock trial case. After
                    being accepted to the New York tournament following a first-place win in San Francisco last year,
                    Santa Susana will compete against 40 other high schools in the hopes of winning another championship
                    trophy. The case this year focuses on the wrongful shooting of an African American teenager by a
                    police officer, and teams will compete as both the plaintiff and the defense. Recently, Santa Susana
                    scrimmaged members of the UCLA mock trial team in preparation for the upcoming competition.
                </p>

                <h3 id="yeacal">Santa Susana Student Establishes the Young Entrepreneur Association of California</h3>
                <a href="http://yeacal.org" target="_blank"><img src="img/content/trumpeter/yeacal-logo.png"
                                                                 alt="Santa Susana Student Establishes the Young Entrepreneur Association of California"
                                                                 class="img-responsive trumpetTitleImg"></a>
                <p>
                    Santa Susana junior, Annika Pa&scaron;eta founded YEAcal (Young Entrepreneur Association of
                    California) in order to provide a program in which middle and high school students who either have a
                    business or want to pursue business are able to obtain the resources and skills they need in order
                    to enter the business world. Her vision is to expand the network of high school students by
                    collaborating with individuals around Ventura County. At Santa Susana, she saw many of her peers
                    interested in the performing arts and technology, so she wanted to provide a place in which they can
                    learn to start selling their art and services. The club was founded along six core values which
                    include <i>PROFITABILITY</i>, <i>FAIR TRADE</i>, <i>ENVIRONMENTAL AWARENESS</i>, <i>COMMUNITY
                        SERVICE</i>, <i>DIVERSE NETWORK</i>, and <i>INTERNATIONAL RELATIONS</i>. These values have
                    become the primary foundation of YEAcal and is what the club stays true to.
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
