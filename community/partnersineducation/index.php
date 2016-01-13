
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
    .partner {
      text-align: center;
    }
    .partner > .img-responsive {
      margin: auto;
      width: 50%;
    }
    .partnerRow {
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
				  <div class="section-title">Partners In Education</div>
				</div>
        <div class="col-xs-12" id="partners"></div>
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
      $("#partners").hide();
      $("#partners").promise().done(function() {

        $("#partners").load("loadPartners.php", function() {
          $(".img-responsive").each(function() {
              $(this).delay(50).height($(".img-responsive").first().height());
          });
          $("div div.noImg").each(function() {
              $(this).height($(".img-responsive").first().height());
              $(this).width($(".img-responsive").first().width());
          });
        });

        $("#partners").show();

      });
    });
  </script>
</body>

</html>
