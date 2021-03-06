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
        height: 600px;
        min-width: 100%;
        max-width: 100%;
        overflow: auto;
        -webkit-overflow-scrolling: touch;
      }

      #calendarDiv, #google_translate_element {
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

      .fa-toggle-up {
        -webkit-transition: transform .25s;
        transition: transform .25s;
      }
      #emergency {
        border: 2px teal solid;
        border-radius: 5px;
        background-color: rgb(239, 239, 239);
        padding-bottom: 20px;
      }
      .emergency-title {
        font-size: 2em;
        text-align: center;
        font-weight: bold;
        color: #ff0000;
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
    $.ajax({
      type: "POST",
      dataType: "json",
      url: "home-section-admin/loadSectionToggled.php",
      cache: false,
      success: function(data) {
        if(data["quick"] == 0) {
          toggleId("#quickLinks", "#quickLinksIcon")
        }
        if(data["district"] == 0) {
          toggleId("#district","#districtIcon");
        }
        if(data["aboutUs"] == 0) {
          toggleId("#aboutUs", "#aboutUsIcon");
        }
        if(data["whatsNew"] == 0) {
          toggleId("#whatsNew", "#whatsNewIcon");
        }
      }
    });
    $("#homeCarouselRow").load("homeCarousel.php", function() {
      setInterval(function() {
        var cWidth = $("#homeCarousel").width();
        var scale = 720.0 / 1920.0;
        var height = cWidth * scale;
        $("#homeCarousel").height(height);
      }, 50);
    });
  });

  function toggleId(id, iconId) {
    $(id).toggle();
    $(iconId).removeClass("fa-rotate-180");
    if($(id).is(":visible")) {
      $(iconId).removeClass("fa-rotate-180");
    } else {
      $(iconId).addClass("fa-rotate-180");
    }
  }

</script>
</body>

</html>
