<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
    <title>Careers | Game Development Club | Santa Susana High School</title>
    <style type="text/css">
        .gamec {
            padding-top: 20px;
            display: inline;
        }
        #half {
            max-width: 45%;
        }
        #ea {
            max-width: 18%;
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
            <div class="col-xs-12 col-sm-9">
              <div class="section-title">Careers</div>
              <p>Game Development is now being seen as a viable career choice. There are many kinds of jobs in the industry.</p>
              <div class="col-sm-8 col-xs-12">
                  <h2>Business and Management <small>$101,572</small></h2>
                  <p>These are the people who run the video game company. Most of them do not usually work directly on the game, but they are a crucial part of making sure the game gets out there and sells.</p>
                  <h2>Audio Professionals <small>$95,682</small></h2>
                  <p>Audio Professionals create everything you hear in a video game. They create voices for characters, sound effects, and music.</p>
                  <h2>Programmers <small>$93,251</small></h2>
                  <p>Programmers write the code that makes the game come together. They work with the designers to make their vision come to life. Programmers are usually specialized, working in one field specifically i.e. A.I. Programming.</p>
                  <h2>Artists and Animators <small>$74,349</small></h2>
                  <p>Artists create the visuals of the games. They create and animate any 3D models, or 2D spritesheets. They also create logos, box art, etc.</p>
                  <h2>Producers <small>$82,286</small></h2>
                  <p>Producers oversee the development of the game. They can either come from the publishing company, or from within the company developing the game. They are similar to a product manager.</p>
                  <h2>Game Designers <small>$73,864</small></h2>
                  <p>A game designer comes up with the concepts of the game. They work with the programmers, sound engineers, and the artists to make a game out of their own vision. To be a designer, many years of experience is needed.</p>
                  <h2>Quality Assurance <small>$54,833</small></h2>
                  <p>Quality Assurance test the games and report any errors. Their job is crucial to making sure the game is released with no bugs or design flaws.</p>
                  <a href="http://www.gamasutra.com/view/news/221533/Game_Developer_Salary_Survey_2014_The_results_are_in.php" target="_blank">Salary Source</a>
              </div>
              <div class="col-sm-4 col-xs-12">
                  <h1>Game Companies in Southern California</h1>
                  <p>Theses are just few of many.</p>
                  <a href="http://atlus.com/" target="_blank"><img src="./images/content/gameCompanies/Atlus_Logo_Thin_Stroke_277x108.png" alt="Atlus" class="img-responsive" /></a>
                  <a href="http://us.blizzard.com/en-us/" target="_blank"><img src="./images/content/gameCompanies/logo-blizzard.png" alt="Blizzard" class="img-responsive gamec" /></a>
                  <a href="http://careers.ea.com/" target="_blank"><img src="./images/content/gameCompanies/EA.png" alt="EA" class="img-responsive gamec" id="ea"/></a>
                  <a href="http://www.dice.se/" target="_blank"><img src="./images/content/gameCompanies/200px-DICE_logo.svg.png" alt="EA Dice" class="img-responsive gamec" /></a>
                  <a href="http://www.infinityward.com/" target="_blank"><img src="./images/content/gameCompanies/6522_infinity-ward-prev.png" alt="Infinity Ward" class="img-responsive gamec" id="half" /></a>
                  <a href="http://sms.playstation.com/" target="_blank"><img src="./images/content/gameCompanies/Santa_Monica_Studio.png" alt="Santa Monica Studios" class="img-responsive gamec" id="half" /></a>
                  <a href="http://wayforward.com/" target="_blank"><img src="./images/content/gameCompanies/header-wf-logo-3.png" alt="Wayforward" class="img-responsive gamec" /></a>
                  <a href="http://www.treyarch.com/" target="_blank"><img src="./images/content/gameCompanies/Treyarch_Logo.jpg" alt="Treyarch" class="img-responsive gamec" /></a>
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
