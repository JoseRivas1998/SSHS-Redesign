
<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
	<title>Downloads | Robotics Club | Santa Susana High School</title>
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
				$path = $_SERVER["DOCUMENT_ROOT"];
				$path .= "/clubs/robotics/left-nav.php";
				include($path);
				?>
				<div class="col-xs-12 col-sm-9">
					<div class="section-title">Downloads</div>
					<div class="list-group">
						<a href="downloads/robotics_flyer.pdf" target="_blank" class="list-group-item">Vex Robotics Flyer</a>
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
