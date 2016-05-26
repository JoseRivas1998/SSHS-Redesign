<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
    <title>Downloads | Game Development Club | Santa Susana High School</title>
    <style type="text/css">
        #img-heading {
            padding-top: 50px;
        }
        .iconLink {
          padding-left: 10px;
          font-size: 20px;
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
              <div class="section-title">Downloads</div>
              <p>This page contains everything you need to download for club.</p>
              <div class="row">
                <div class="col-sm-5 col-xs-12">
                    <img src="images/content/eclipse.png" id="img-heading" class="img-responsive" />
                    <p>Eclipse Mars is an Open-Source Java IDE. Eclipse will compile and run your code in one click. Programmers like Eclipse because it is very good at completing code for you. Eclipse is also very popular among programmers because there are plug-ins to make it work with any programming language. To download, click the link bellow and download the Eclipse Installer for your Operating System</p>
                    <p><a href="https://www.eclipse.org/downloads/" target="_blank">Download Here</a></p>
                </div>
                <div class="col-sm-7 col-xs-12">
                    <div id="eclipse-carousel" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="images/content/downlaodsCarousel/eclipse-web.png" class="img-responsive" />
                            </div>
                            <div class="item">
                                <img src="images/content/downlaodsCarousel/eclipse.png" class="img-responsive" />
                            </div>
                            <a href="#eclipse-carousel" class="carousel-control left" data-slide="prev">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                            <a href="#eclipse-carousel" class="carousel-control right" data-slide="next">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-5 col-xs-12">
                    <img src="images/content/libgdx.png" id="img-heading" class="img-responsive" />
                    <p>LibGDX is an open source game engine for Java. LibGDX is meant to be able to deploy on any platform with Java, so you only have to write one version of the code for your game and it will be available on Desktop/Android/iOS/HTML5. We will be using LibGDX to code our games. To download, click the link below and click "Download Setup App"</p>
                    <p><a href="http://libgdx.badlogicgames.com/download.html" target="_blank">Download Here</a></p>
                </div>
                <div class="col-sm-7 col-xs-12">
                    <div id="libgdx-carousel" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="images/content/downlaodsCarousel/libgdx-web.png" class="img-responsive" />
                            </div>

                            <div class="item">
                                <img src="images/content/downlaodsCarousel/libgdx.png" class="img-responsive" />
                            </div>

                            <a href="#libgdx-carousel" class="carousel-control left" data-slide="prev">
                                <i class="fa fa-arrow-left"></i>
                            </a>

                            <a href="#libgdx-carousel" class="carousel-control right" data-slide="next">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-5 col-xs-12">
                    <img src="images/content/androidsdk.png" id="img-heading" class="img-responsive" />
                    <p>The Android SDK provides us with the tools we need in order to port our games onto Android. If you would like to check out Andorid Studeio, the IDE built specifically for Android, visit the site <a href="https://developer.android.com/sdk/index.html" target="_blank">here</a>.</p>
                </div>
                <div class="col-sm-7 col-xs-12">
                    <div id="android-carousel" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="images/content/downlaodsCarousel/androidsdk-web.png" class="img-responsive" />
                            </div>

                            <div class="item">
                                <img src="images/content/downlaodsCarousel/androidsdk.png" class="img-responsive" />
                            </div>

                            <a href="#android-carousel" class="carousel-control left" data-slide="prev">
                                <i class="fa fa-arrow-left"></i>
                            </a>

                            <a href="#android-carousel" class="carousel-control right" data-slide="next">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-5 col-xs-12">
                    <img src="images/content/tiled.png" id="img-heading" class="img-responsive" />
                    <p>Tiled Map Editor is an open source map editor. The designers will be using this program to put the levels for the 2D side-scroller together. We won't be using this for a while, but it is best that the designers have it already so we don't have to spend too much time downloading it when the time comes. To download, click the link bellow and click the link for your operating system under "latest release"</p>
                    <p><a href="http://www.mapeditor.org/download.html" target="_blank">Download Here</a></p>
                </div>
                <div class="col-sm-7 col-xs-12">
                    <div id="tiled-carousel" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="images/content/downlaodsCarousel/tiled-web.png" class="img-responsive" />
                            </div>

                            <div class="item">
                                <img src="images/content/downlaodsCarousel/tiled.png" class="img-responsive" />
                            </div>

                            <a href="#tiled-carousel" class="carousel-control left" data-slide="prev">
                                <i class="fa fa-arrow-left"></i>
                            </a>

                            <a href="#tiled-carousel" class="carousel-control right" data-slide="next">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
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
