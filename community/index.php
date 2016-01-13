
<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
	<title>Community | Santa Susana High School</title>
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
				$path .= "/community/left-nav.php";
				include($path);
				?>
				<div class="col-xs-12 col-sm-9">
					<div class="section-title">Community</div>
					<div class="col-xs-5">
						<img src="simimap.png" alt="Simi Valley" class="img-responsive">
					</div>
					<div class="col-xs-7">
						<p>Welcome to the Community Info Page. </p>
						<p>
							Here you can find the PTSA, as well as receive information about our Boosters, Partners in Education, and Community Resources.
						</p>
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
