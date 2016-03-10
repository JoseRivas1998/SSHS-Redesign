<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
    <title>KSSH News | Santa Susana High School</title>
    <style>

        .topLink {
            list-style-type: none;
            text-align: center;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 0;
            margin-bottom: 10px;
        }

        .topLink {
            display: inline-block;
        }

        .topLink {
            padding: 10px 10px 10px 10px;
            background-color: rgb(18, 138, 165);
            color: white;
            border: teal;
            border-radius: 5px;
            -webkit-transition: all .25s; /* Safari */
            transition: all .25s;
        }

        .topLink:hover, .topLink:focus {
            background-color: rgb(11, 89, 107);
            text-decoration: none;
            color: white;
        }

        #montageRow {
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
                <div class="section-title">KSSH News</div>

                <div class="row" id="montageRow">
                    <div class="col-xs-12">
                        <a class="topLink" href="http://safarisshs.simivalleyusd.org/SAFARI/montage/schoolnews.html">Safari
                            Montage</a>
                    </div>
                    <div class="col-xs-12">
                      <a href="https://www.youtube.com/channel/UC5XXgEwZGCbKc6LqMMzd9EA" target="_blank" class="topLink"><i class="fa fa-youtube"></i> KSSH YouTube Chanel</a>
                    </div>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <div class="section-title">Select School Year</div>
                    <ul class="nav nav-tabs nav-justified" id="navTabs">
                      <li role="presentation" class="active" id="1516l"><a id="1516a" href="javascript:void(0)">2015-16</a></li>
                      <li role="presentation" id="1415l"><a id="1415a" href="javascript:void(0)">2014-15</a></li>
                      <li role="presentation" id="1314l"><a id="1314a" href="javascript:void(0)">2013-14</a></li>
                      <li role="presentation" id="1213l"><a id="1213a" href="javascript:void(0)">2012-13</a></li>
                      <li role="presentation" id="1112l"><a id="1112a" href="javascript:void(0)">2011-12</a></li>
                      <li role="presentation" id="1011l"><a id="1011a" href="javascript:void(0)">2010-11</a></li>
                      <li role="presentation" id="0809l"><a id="0809a" href="javascript:void(0)">2008-09</a></li>
                      <li role="presentation" id="0708l"><a id="0708a" href="javascript:void(0)">2007-08</a></li>
                    </ul>
                  </div>
                </div>

                <div class="embed-responsive embed-responsive-16by9" id="pl">
                    <iframe class="embed-responsive-item" id="newsPL" frameborder="0" allowfullscreen></iframe>
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
<script src="video.js"></script>
</body>

</html>
