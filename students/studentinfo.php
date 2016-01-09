
<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
	<title>Student Info | Santa Susana High School</title>
	<style type="text/css">
		ul {
			padding-left: 25%;
		}
		ul > li{
			list-style-type: none;
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
				<?php
				include('left-nav.php');
				?>
				<div class="col-sm-9 col-xs-12" id="studentInfo">
					<div class="section-title">Student Info</div>
					<div class="col-xs-6">
						<ul>
							<li><a href="https://awps.simivalleyusd.org/aeries.net/" target="_blank">Aeries Website</a></li>
							<li><a href="">Student Parking Permit</a></li>
							<li><a href="">Community Resources</a></li>
							<li><a href="">Bell Schedule</a></li>
							<li><a href="">School &amp; Academy Structure</a></li>
							<li><a href="/students/tap.php">TAP</a></li>
						</ul>
					</div>
					<div class="col-xs-6">
						<ul>
							<li><a href="">CTE Information</a></li>
							<li><a href="/clubs/">Clubs</a></li>
							<li><a href="http://webstores.activenetwork.com/school-software/santa_susana_high_sc/" target="_blank">Student Store</a></li>
							<li><a href="">AP/Honors Summer Work</a></li>
							<li><a href="">Verbal Advantage</a></li>
						</ul>
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