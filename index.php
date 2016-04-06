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
      .emergency {
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
  <div class="container emergency">
    <div class="row">
      <div class="col-xs-12">
        <div class="emergency-title">PARENT ALERT UPDATE FOR SANTA SUSANA HIGH SCHOOL<br/>APRIL 6, 2016 1:15 P.M.</div>
        <p>This email was just sent to the parents at SSHS. Everyone is still sheltered and safe at the school while police continue their investigation:</p>
        <p>Dear Parents:</p>
        <p>The Simi Valley Police Department has released the following information regarding the lock down, which is still in progress:</p>
        <p>Santa Susana High School on Lock-down while Police Investigate Threat.</p>
        <p>This morning at about 10:57 AM, the Simi Valley Unified School district advised The Simi Valley Police Department that they had received an email communication indicating a potential bomb threat on the campus of Santa Susana High School.</p>
        <p>Based on the nature of the communication, and as a precautionary measure, the school was placed on lock-down status while Officers searched the campus for this potential threat. There is no other information regarding the threat at this time.</p>
        <p>The police department has several of its resources on campus for this call.</p>
        <p>As a reminder:</p>
        <ol>
          <li>Students and staff are not allowed to use cell phone during a lock down. As soon as they are cleared to, your students will be able to text you.</li>
          <li>PLEASE DO NOT GO TO THE SCHOOL! The students will not be released, and the extra confusion and traffic around the school can create more problems and delay the lock down from ending.</li>
          <li>As soon as we have more information we will be sending it out through our channels: website, all-calls, Facebook, Twitter, district app.</li>
        </ol>
        <p>Thank you,<br/>
        Dr. Jason Peplinski</p>
        <div class="emergency-title">PARENT ALERT FOR SANTA SUSANA HIGH SCHOOL<br/>APRIL 6, 2016, 12:15 P.M.</div>
        <p>Dear Parents:</p>
        <p>About 40 minutes ago, Santa Susana High School was placed on lock down by the Simi Valley Police Department. ALL STUDENTS AND STAFF ARE SAFE AND SHELTERED. The police are continuing their investigation and this is the information we’ve been given so far:</p>
        <blockquote>“We have third hand information regarding threats that we have yet to confirm but we are playing it safe. We will investigate and search the school. Staff has locked down the school per policy as a precaution. Parents should not respond as they won’t be allowed on campus.”</blockquote>
        <p>We do NOT have any more information at this time, but we will release information as soon as we are able to.</p>
        <p>There are a few things to know as we go through this process:</p>
        <ol>
          <li>Students and staff are not allowed to use cell phone during a lock down. As soon as they are cleared to, your students will be able to text you.</li>
          <li>PLEASE DO NOT GO TO THE SCHOOL! The students will not be released, and the extra confusion and traffic around the school can create more problems and delay the lock down from ending.</li>
          <li>As soon as we have more information we will be sending it out through our channels: website, all-calls, Facebook, Twitter, district app.</li>
          <li>There are many reasons why a lock down would be issued, but the main point is that the police need staff and students sheltered so they can ensure their safety.</li>
        </ol>
        <p>Thank you for your patience.</p>
        <p>Dr. Jason Peplinski<br/>
          Superintendent</p>
      </div>
    </div>
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
        var scale = 1 / 3;
        if(cWidth > 1024) {
          scale *= 1024 / cWidth;
        }
        $("#homeCarousel").height(cWidth * scale);
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
