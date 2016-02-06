<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
    <title>New School Website | Santa Susana High School</title>
    <style>
        #title {
            margin: auto;
            padding-top: 10px;
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
                <img src="tcgwithsshs.png" alt="Tiny Country Games with Santa Susana High School" class="img-responsive"
                     id="title">
                <h3>Welcome to the New Santa Susana Website!</h3>
                <p>
                    <a href="/webmasters" target="_blank">The Santa Susana Webmaster Team</a> decided it was about time
                    that the school website needs a new makeover. The old website, not only had an outdated look, but
                    broke on different screen sizes. Now we use <a href="https://getbootstrap.com" target="_blank">Twitter's
                        Bootstrap</a> to allow us to make the website respond to the width of the screen. Please look at
                    the demo bellow.
                </p>
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title">Try Me!</div>
                            </div>
                            <div class="panel-body">
                                <h3>Resize the Screen!</h3>
                                Watch as I take up a 3rd of the screen on the larger screen size, and the entire screen
                                on a smaller.
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title">Try Me!</div>
                            </div>
                            <div class="panel-body">
                                <h3>Resize the Screen!</h3>
                                Watch as I take up a 3rd of the screen on the larger screen size, and the entire screen
                                on a smaller.
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title">Try Me!</div>
                            </div>
                            <div class="panel-body">
                                <h3>Resize the Screen!</h3>
                                Watch as I take up a 3rd of the screen on the larger screen size, and the entire screen
                                on a smaller.
                            </div>
                        </div>
                    </div>
                </div>
                <p>
                    We have also included the use of <a href="https://fortawesome.github.io/Font-Awesome/"
                                                        target="_blank">FortAwesome's FontAwesome</a>. This gives us a
                    wide array of icons we can use in the site to make it much more visual, without even having to load
                    in images! The icons are all preloaded in a font, and we simply enter a code for the icon to show
                    up. Bellow are some example icons.
                </p>
                <p>
                    <i class="fa fa-twitter fa-5x"></i>
                    <i class="fa fa-instagram fa-5x"></i>
                    <i class="fa fa-rebel fa-5x"></i>
                    <i class="fa fa-empire fa-5x"></i>
                    <i class="fa fa-facebook fa-5x"></i>
                </p>
                <p>
                    The redesign was created by Jos&eacute; de Jesus Rodriguez-Rivas, a student in Santa Susana's
                    Class of 2017. Jos&eacute; has a passion for Computer Programming, with a special interest in Video
                    Game Development. He has run many of his own websites since his freshman year at Santa Susana. He
                    loves making games for everyone to enjoy. His studio is called <a
                        href="https://tinycountrygames.com" target="_blank">Tiny Country Games</a>. Feel free to look at
                    his website and check out his work. His <a href="https://tinycountrygames.com/resume.php"
                                                               target="_blank">r&eacute;sum&eacute;</a> is also
                    available online.
                </p>
                <p>
                  Special Thanks to <a href="http://nickparksdev.com/" target="_blank">Nick Parks</a> for helping with Google Backend Authentication for admin pages.
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
