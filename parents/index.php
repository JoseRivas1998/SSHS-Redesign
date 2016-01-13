
<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
	<title>Parents | Santa Susana High School</title>
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
				<div class="col-xs-12 col-sm-9">
					<div class="row">
						<div class="col-xs-12">
							<div class="section-title">General Info</div>
						</div>
						<div class="col-xs-5">
							<img src="img/parenthelpinghomework.png" alt="Parent Helping Homework" class="img-responsive">
						</div>
						<div class="col-xs-7">
							<p>
								Welcome to the Parent Info Page.
							</p>
							<p>
								Here you can find all of the Parent Information that you may need, as well as Why Choose Santa Susana High School, A School of Choice. Also, all of the Documents you may require, the Troubadour Express bi-monthly newsletter, and the district's Discipline Policy can be found to the left.
							</p>
						</div>
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
