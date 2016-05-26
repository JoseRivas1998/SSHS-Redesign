<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
    <title>About Us | Game Development Club | Santa Susana High School</title>
    <style>
        #back-top {
	        position: fixed;
	        bottom: 12%;
	        margin-left: -5%;
        }

        #back-top a {
	        display: block;
	        text-align: center;
	        font-size: 32px;
            text-shadow: none;
            color: #d0d0d0;
            cursor: none;

	        /* transition */
	        -webkit-transition: .5s;
	        -moz-transition: .5s;
	        transition: .5s;
        }
        #back-top a:hover {
            color: #000;
            cursor: pointer;
            text-shadow: 10px 10px 10px rgb(136,136,136);
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
              <div class="col-xs-12">
                <div class="section-title">About Us</div>
              </div>
              <div class="col-sm-6 col-xs-12">
                  <h2>Video Games <small>What are they and why are they important?</small></h2>
                  <p>A video game is a form of interactive media where a user interacts with a computer program in real time to accomplish an objective created by the game's developer. This description pretty much covers all games found on today's market. The objectives created by the developer can range from rescuing a princess, fight against the Nazi's on D-Day, play a simple sport, or even simulate an imaginary persons life. It is not very difficult to understand why video games are so popular. Video games have provided the world with a way to become heroes, villains, or basically anyone they want to be. Video games unite many worlds together, especially lately as games are becoming bigger. Games usually have art work, music, complex stories, and of course, thousands of lines of code. Because of this, many people can be a part of the game development process.</p>

                  <h2>Game Development <small>What is it?</small></h2>
                  <p>In simple terms, Game Development is the process in which video games are developed. As computers became more user friendly, and interactive in the 1970's, computer scientists began creating interactive games. One of the firsts games to hit the arcades was Atari's Pong in 1972. Since then, many companies sprung up, or re-purposed, to build the largest industry in entertainment today. Recently, video game development has been accepted as a more viable career choice, due to the growing industry. Developing a game can be simplified to three basic categories, Programming, Art and Sound, and Design. These are the three categories that we split our members into.</p>

                  <h3>Programming</h3>
                  <p>People in the industry refer to programming as development, so programmers are developers. The programming aspect is the main focus of Santa Susana's Game Development Club. Programming requires people who can think logically. It includes problem solving, critical thinking, patience, and creativity. Basic understanding Algebra, as in Variables and Equations is needed from programmers. Developers should also have some geometry experience, because game development is all coordinates, angles, etc. Please note there is no required class to be a developer for the club, if a developer does not understand a mathematical concept, they will be walked through the concept. Another job a developer has is UI design. It is important that the developer provides the player with a comprehensive interface so they can play without struggling.</p>
                  <p>Developers will be using Java, a popular programming language among programmers. It is a simple C based language that was created for the Java Runtime Environment that can run on multiple platforms with only being coded once. The Android development kit is also in Java, so Android developers make their apps in Java. It is important to note that JavaScript and Java are not at all related, knowing JavaScript does not mean you can program in Java, however similar syntax and concepts can help. Developers in Game Dev. Club use a game framework, or engine, called <a href="https://libgdx.badlogicgames.com/" target="_blank">libGDX</a>. libGDX is an engine created for cross platform development, so a developer can code their game once, and deploy it to Desktop (PC/OSX/Linux), Web, Android, and even iOS. Programmers can get a head start in learning code on the <a href="/tutorials.php?pl=2" target="_blank">tutorials</a> page.</p>

                  <h3>Art</h3>
                  <p>Art includes visuals and sound. This aspect is geared towards people who can already do pixel art or make music/sound, but we do welcome students with no experience. This includes creating characters and tilesets. Musicians are also welcome to create tracks and sound effects for the games we develop in the club. As for the visuals, the computers at Santa Susana have Adobe Photoshop installed, to provide industry standard software for creating these visuals. Pixel art and/or animation experience would be very much appreciated, but are not required.</p>

                  <h3>Design</h3>
                  <p>Game design is the aspect in the process more looked at by the gaming community. Design includes creating stories and concepts for games. This club will teach many game design concepts through a popular YouTuber, <a href="https://www.youtube.com/user/ExtraCreditz" target="_blank">Extra Credits</a>. The design aspect will not be a strong focus in this club. This club is focused on development, and is for entry level programmers. Because of this, the games they will make will be simple and having designers with complicated ideas and concepts will be too overwhelming. However, side projects among the more experienced developers, artists, and designers are welcome and encouraged.</p>

                  <p id="back-top" class="hidden-xs">
                  <a><i class="fa fa-arrow-up"></i></a>
                </p>

              </div>
              <div class="col-sm-6 col-xs-12">
                  <h2>The Board</h2>
                  <h3>Jos&eacute; Rodriguez-Rivas <small>Club President</small></h3>
                  <p>Jos&eacute; is a Junior at Santa Susana High School. He chose the school so that he can learn Computer Programming for Video Game Development. Jos&eacute; is a huge fan of video games, he has been playing for as long as he can remember. In 2009, he started looking into ROM hacks for the Pok&eacute;mon games on the Gameboy Advanced. This lead him to researching ways to make his own ROM hacks. He found the tools to make simple hacks, like changing text, textures, and Pok&eacute;mon found in the games. One day he stumbled on a YouTube video that was supposed to be about making a Pok&eacute;mon game. This video showed him a program called <a href="http://store.steampowered.com/app/235900/" target="_blank">RPG Maker XP</a> by Enterbrain. After looking beyond the Pok&eacute;mon materials provided by the program, he realized he can make his own original games. In middle school, RPG Maker got an upgrade, <a href="http://store.steampowered.com/app/220700/" target="_blank">RPG Maker VX Ace</a> had been released. After toying with the upgraded engine, he realized that he wanted to make video games for a living. As a Freshman, he joined Santa Susana's newest club, Game Development Club. In this club, he was introduced to Java programming. After a lot of hard work and self teaching, Jos&eacute; became confident enough in his programming skills and development skills that he started <a href="http://tinycountrygames.com/" target="_blank">Tiny Country Games</a>, his game studio. Since then, he has learned HTML, CSS, JavaScript, ASP.NET, C#, MySQL, and other insignificant technologies. </p>
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

<script>
    $(document).ready(function () {

        // hide #back-top first
        $("#back-top").hide();

        // fade in #back-top
        $(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $('#back-top').fadeIn();
                } else {
                    $('#back-top').fadeOut();
                }
            });

            // scroll body to 0px on click
            $('#back-top a').click(function () {
                $('body,html').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });
        });

    });
</script>
</body>

</html>
