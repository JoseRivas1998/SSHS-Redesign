
<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
	<title>Grades | Santa Susana High School</title>
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
				<div class="col xs 12 col-sm-9">
					<div class="section-title">Grades</div>
					<p>
						For quick access to your student's grades (and attendance), go to the <a href="https://awps.simivalleyusd.org/aeries.net/" target="_blank">Aeries website</a>.
					</p>
					<p>
						Grade Reporting occurs 8 times a year. Take a look at the 2014-2015 Grading Calendar <a href="/resources/downloads/2014-15gradingcalendar.pdf" target="_blank">here</a>.
					</p>
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
