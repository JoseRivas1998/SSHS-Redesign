<!DOCTYPE html>
<html lang="en">
	
	<head>
		<?php
		$path = $_SERVER['DOCUMENT_ROOT'];
		$path .= "/inc/head.php";
		include($path);
		?>
		<title>Santa Susana High School</title>
	</head>
	
	<body>
		<header>
			<?php
			$path = $_SERVER['DOCUMENT_ROOT'];
			$path .= "/inc/topnavbar.php";
			include($path);
			?>
			<link rel="stylesheet" href="langClasses.css">
		</header>

		<section id="content-wrapper">
			<div class="container" id="content-container">
				<div class="row">
					<div class="col-xs-12">
					
						<div class="row">
						
							<div class ="col-xs-12" id="box">
								<!--class banner-->
							</div>
							
						</div>
						
						<div class="row">
						
							<div class="col-xs-12 col-sm-6" id="box">
								<!--first pic-->
								<img src="" class="img-responsive">
							</div>
							<div class="col-xs-12 col-sm-6" id="box";>
								<!--first info-->
								<h3> About the Class </h3>
							</div>
							
						</div>
						
						<div class="row">
						
							<div class="col-xs-12 col-sm-6" id="box">
								<!--second pic-->
								<img src="" class="img-responsive">
							</div>
							<div class="col-xs-12 col-sm-6" id="box">
								<!--second info-->
								<h3> About the Language </h3>
								
							</div>
							
						</div>
						
						<div class="row">
						
							<div class="col-xs-12 col-sm-6" id="box">
								<!--third pic-->
								<img src="" class="img-responsive">
							</div>
							<div class="col-xs-12 col-sm-6" id="box">
								<!--third info-->
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
