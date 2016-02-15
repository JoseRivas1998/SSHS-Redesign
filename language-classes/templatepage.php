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
		</header>

		<section id="content-wrapper">
			<div class="container" id="content-container">
				<div class="row">
					<div class="col-xs-12">
					
						<div class="row">
						
							<div class ="col-xs-12">
								<!--class banner-->
							</div>
							
						</div>
						
						<div class="row">
						
							<div class="col-xs-12 col-sm-6">
								<!--first pic-->
								<img src="" class="img-responsive">
							</div>
							<div class="col-xs-12 col-sm-6">
								<!--first info-->
							</div>
							
						</div>
						
						<div class="row">
						
							<div class="col-xs-12 col-sm-6">
								<!--second pic-->
								<img src="" class="img-responsive">
							</div>
							<div class="col-xs-12 col-sm-6">
								<!--second info-->
								
							</div>
							
						</div>
						
						<div class="row">
						
							<div class="col-xs-12 col-sm-6">
								<!--third pic-->
								<img src="" class="img-responsive">
							</div>
							<div class="col-xs-12 col-sm-6">
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
