
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
        <div class="col-xs-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-12 col-sm-4 partner">Name</div>
								<div class="col-xs-12 col-sm-4 partner">Website</div>
								<div class="col-xs-12 col-sm-4 partner">Logo</div>
							</div>
						</div>
						<div class="panel-body" id="parnters"></div>
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
		$(document).ready(function() {
			$("#partners").load("loadPartners.php");
		});
	</script>
</body>
</html>
