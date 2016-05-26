<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
    <title>Game Development Club | Santa Susana High School</title>
    <style>
        #calendar {
            margin-top: 0;
        }
        #formName {
            padding-left: 0;
        }
        #indicade-carousel {
          height: 100%;
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
              <div class="col-xs-12 col-sm-9">
                <div class="section-title">Santa Susana Game Development Club</div>
                <p>Welcome to the web page for Santa Susana High School's Game Development Club! Game Dev Club is a club where students are taught how to develop video games using computer programming. The goal of the club is to not only create games, but to also simulate the actual working environment in Game Development, teaching the members about collaboration and the Game Developing Process.</p>
                <div class="col-sm-6 col-xs-12">
                    <div class="embed-responsive embed-responsive-4by3">
                      <div class="embed-responsive-item">
                            <div id="gameDev-carousel" class="carousel slide">
                                <ol class="carousel-indicators">
                                    <li data-target="#gameDev-carousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#gameDev-carousel" data-slide-to="1"></li>
                                    <li data-target="#gameDev-carousel" data-slide-to="2"></li>
                                    <li data-target="#gameDev-carousel" data-slide-to="3"></li>
                                    <li data-target="#gameDev-carousel" data-slide-to="4"></li>
                                </ol>
                                <div class="carousel-inner">

                                    <div class="item active">
                                        <img src="./images/carousel/IMG_0271.JPG" class="img-responsive" />
                                    </div>

                                    <div class="item">
                                        <img src="./images/carousel/IMG_0272.JPG" class="img-responsive" />
                                    </div>

                                    <div class="item">
                                        <img src="./images/carousel/IMG_0273.JPG" class="img-responsive" />
                                    </div>

                                    <div class="item">
                                        <img src="./images/carousel/IMG_0274.JPG" class="img-responsive" />
                                    </div>

                                    <div class="item">
                                        <img src="./images/carousel/IMG_0278.JPG" class="img-responsive" />
                                    </div>

                                    <a href="#gameDev-carousel" class="carousel-control left" data-slide="prev">
                                        <i class="fa fa-arrow-left"></i>
                                    </a>

                                    <a href="#gameDev-carousel" class="carousel-control right" data-slide="next">
                                        <i class="fa fa-arrow-right"></i>
                                    </a>

                                </div>
                            </div>
                      </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="https://www.google.com/calendar/embed?showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;wkst=1&amp;bgcolor=%23c0c0c0&amp;src=uioi5lkseqrvd0f7ecrvnh91gc%40group.calendar.google.com&amp;color=%23875509&amp;ctz=America%2FLos_Angeles" style=" border-width:0 " frameborder="0" scrolling="no"></iframe>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-7 col-xs-12">
                        <h3>IndieCade Trip <small>October 24<sup>th</sup>, 2015</small></h3>
                        <div class="embed-responsive embed-responsive-16by9">
                            <div class="embed-responsive-item">
                                <div id="indicade-carousel" class="carousel slide">
                                    <ol class="carousel-indicators">
                                        <li data-target="#indicade-carousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#indicade-carousel" data-slide-to="1"></li>
                                        <li data-target="#indicade-carousel" data-slide-to="2"></li>
                                        <li data-target="#indicade-carousel" data-slide-to="3"></li>
                                        <li data-target="#indicade-carousel" data-slide-to="4"></li>
                                        <li data-target="#indicade-carousel" data-slide-to="5"></li>
                                        <li data-target="#indicade-carousel" data-slide-to="6"></li>
                                        <li data-target="#indicade-carousel" data-slide-to="7"></li>
                                        <li data-target="#indicade-carousel" data-slide-to="8"></li>
                                        <li data-target="#indicade-carousel" data-slide-to="9"></li>
                                        <li data-target="#indicade-carousel" data-slide-to="10"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <img src="images/content/trips/indiecade/00.JPG" class="img-responsive" />
                                        </div>

                                        <div class="item">
                                            <img src="images/content/trips/indiecade/01.JPG" class="img-responsive" />
                                        </div>

                                        <div class="item">
                                            <img src="images/content/trips/indiecade/02.JPG" class="img-responsive" />
                                        </div>

                                        <div class="item">
                                            <img src="images/content/trips/indiecade/03.JPG" class="img-responsive" />
                                        </div>

                                        <div class="item">
                                            <img src="images/content/trips/indiecade/04.JPG" class="img-responsive" />
                                        </div>

                                        <div class="item">
                                            <img src="images/content/trips/indiecade/05.JPG" class="img-responsive" />
                                        </div>

                                        <div class="item">
                                            <img src="images/content/trips/indiecade/06.JPG" class="img-responsive" />
                                        </div>

                                        <div class="item">
                                            <img src="images/content/trips/indiecade/07.JPG" class="img-responsive" />
                                        </div>

                                        <div class="item">
                                            <img src="images/content/trips/indiecade/08.JPG" class="img-responsive" />
                                        </div>

                                        <div class="item">
                                            <img src="images/content/trips/indiecade/09.JPG" class="img-responsive" />
                                        </div>

                                        <div class="item">
                                            <img src="images/content/trips/indiecade/10.JPG" class="img-responsive" />
                                        </div>
                                    </div>
                                    <a href="#indicade-carousel" class="carousel-control left" data-slide="prev">
                                        <i class="fa fa-arrow-left"></i>
                                    </a>

                                    <a href="#indicade-carousel" class="carousel-control right" data-slide="next">
                                        <i class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-3">
                <div class="section-title">Board</div>
                <p>N/A</p>
                <div class="section-title">Times</div>
                <p>N/A</p>
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
