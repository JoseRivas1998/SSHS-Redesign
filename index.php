<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
    <title>Santa Susana High School</title>
    <style>
      #carousel-container {
        padding-bottom: 20px;
      }
      .homeRow {
        padding-top: 5px;
      }
      .homeLink {
        background-color: rgb(245, 245, 245);
        background-position: center;
        background-repeat: no-repeat;
        background-image: url('/img/layout/panelbg.png');
        background-size: auto 100%;
        border: 1px solid teal;
        border-radius: 5px;
        margin:10px;
        padding:10px;
        box-shadow: 0 3px 10px teal;
        color: #333;
      }
      .homeLinkTitle {
        font-size: 24px;
        font-weight: 700;
      }
      #twitter-widget-0 {
          width: 100%;
          background-color: rgba(255, 255, 255, .55);
          background-position: center;
          background-repeat: no-repeat;
          background-image: url('/img/layout/panelbg.png');
          background-size: auto auto;
          border: 1px solid #ddd;
          border-radius: 4px;
      }
      #calendarFrame {
        width: 1px;
        min-width: 100%;
        height: 600px;
        overflow: auto;
        -webkit-overflow-scrolling: touch;
      }

      #performingBtn > img {
          margin: 0 auto;
          padding-top: 20px;
      }

      #performingBtn > p {
          text-align: center;
          padding-top: 10px;
      }
      #content-container {
        padding-top: 20px;
      }
      #sshsFoot {
        font-size: 34px;
        font-family: 'Philosopher', sans-serif;
        text-align: right;
      }
      #footRow2 {
        padding-top: 5px;
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
  <div class="container-fluid" id="carousel-container">
    <div class="row" id="homeCarouselRow"></div>
  </div>
  <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <?php
            include("getHomeLinks.php");
            include("quickLinks.php");
            include("whatsNew.php");
            include("districtLinks.php");
            include("aboutUs.php");
          ?>
        </div>
      </div>
  </div>
  <div class="container" id="content-container">
    <div class="row">
      <?php
        include("twitterTimeline.php");
        include("calendar.php");
        include("showMastersKssh.php");
      ?>
    </div>
    <div class="row">
      <?php
      include("homeFooter.php");
      ?>
    </div>
  </div>
</section>

<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/inc/javascript.php";
include($path);
?>
<script>
  $(document).ready(function() {
    $('#actionBarFromDB').load('actionbar.php');
    $('#nextShow').load('loadNextShow.php');
    $("#homeCarouselRow").load("homeCarousel.php", function() {
      setInterval(function() {
        var cWidth = $("#homeCarousel").width();
        $("#homeCarousel").height(cWidth / 3);
      }, 50);
    })
  });

</script>
</body>

</html>
