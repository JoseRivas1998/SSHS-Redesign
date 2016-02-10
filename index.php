<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
    <title>Santa Susana High School</title>
    <style type="text/css">
        .list-text {
            padding-left: 10px;
        }

        #about {
            text-align: center;
        }

        #about > a, #about > .about-text {
            font-size: 18px;
        }

        #about > img {
            margin-left: auto;
            margin-right: auto;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        #about > .list-group {
            text-align: left;
        }

        #sections {
            padding-top: 20px;
        }

        #performingBtn > img {
            margin: 0 auto;
            padding-top: 20px;
        }

        #performingBtn > p {
            text-align: center;
            padding-top: 10px;
        }

        #twitter-widget-0 {
            height: 100%;
            background-color: rgba(255, 255, 255, .55);
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        #quickList {
          padding-top: 20px;
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
    <div id="actionBarFromDB"></div>
</header>


<section id="content-wrapper">
    <div class="container" id="content-container">
        <div class="row">
            <div class="col-xs-12">
                <div class="row">
                    <?php
                    include("homeCarousel.php");
                    ?>
                </div>
                <div class="row" id="sections">
                    <?php
                    include("quickLinks.php");
                    ?>
                    <?php
                    include("whatsNew.php");
                    ?>
                    <?php
                    include("calendar.php");
                    ?>
                </div>
                <div class="row">
                    <?php

                    include("twitterTimeline.php");

                    ?>
                    <?php

                    include("districtLinks.php");

                    ?>
                    <?php

                    include("aboutUs.php");

                    ?>
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
    function sizeAll() {
        $('div div.panel-row-1').each(function () {
            if ($(this).attr('id') != 'quick') {
                var height = $('#quick').height();
                $(this).height(height);
            }
        });
        $('div div.panel-row-2').each(function () {
            if ($(this).attr('id') != 'about') {
                var height = $('#about').height();
                $(this).height(height);
            }
        });
        $('#calendar').css('height', '90%');
    }
    $(document).ready(function () {
        $('#nextShow').load('loadNextShow.php');
        $('#actionBarFromDB').load('actionbar.php');
        sizeAll();
        setInterval('sizeAll()', 500);
    });

    $(window).on('resize', function () {
        sizeAll();
    });

</script>
</body>

</html>
