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
  <div class="container" id="emergency">
    <div class="row">
      <div class="col-xs-12">
        <div class="emergency-title">FOLLOW UP TO WEDNESDAY'S LOCKDOWN AT<br/>SANTA SUSANA HIGH SCHOOL</div>
        <p>On Thursday, April 7, Simi Valley Police Department detectives arrested a Santa Susana High School student and subsequently booked the student into Ventura County Juvenile Hall on suspicion of making terrorist threats.</p>
        <p>The student’s alleged threats were the cause of a four-hour lockdown at Santa Susana High School on Wednesday, April 6. Law enforcement personnel from several agencies and led by the Simi Valley Police Department extensively investigated and determined the threats not to be credible. Students and staff were safely released around 3 p.m. that day.</p>
        <p>Dr. Jason Peplinski, SVUSD superintendent, said he was grateful to everyone who assisted in the investigation that day.</p>
        <p>“On behalf of the staff and students at Santa Susana High School and the Simi Valley Unified School District, I wish to extend my gratitude to all of the personnel and agencies involved in taking care of our school during this incident,” he said. “The Simi Valley Police Department performed their duties with the highest level of professionalism and excellence, taking seriously the potential threat to our students, staff and community. Many additional agencies generously shared their resources to aid in the investigation that day and the level of commitment shown for our safety was exemplary.”</p>
        <p>“I also wish to thank our staff at Santa Susana High School,” Dr. Peplinski continued. “Every single SSHS staff member present that day performed his or her duties calmly and with great concern for the students. We’ve heard stories of teachers taking selfless care of their students during and after the incident with no concern for their own needs. I am honored to work with such an incredible group of people, and to know that our students always come first.”</p>
        <p>The SVUSD is creating informational materials about updated emergency procedures, which will be made public within the next few days. These include general lockdown procedures and what parents, staff and students can expect in the event of a lockdown emergency at one of our school sites or offices.</p>
        <p>Over the last few months, the SVUSD has outfitted every district classroom with a lockdown kit, which includes basic First Aid and sanitation supplies. Every campus has received trauma-level First Aid kits and emergency supplies are being updated and replaced as needed.</p>
        <p>If you or your family were directly involved in Wednesday's event, we wish to thank you for your tolerance and patience as we worked to keep your loved ones safe in the face of a difficult investigation. </p>
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
