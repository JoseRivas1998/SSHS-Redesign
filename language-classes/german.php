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
							<div class="col-xs-12 col-sm-6" id="box">
								What is German class like at Santa Susana High School?  First of all, Frau Newell is a native of Germany.  She was born and raised in Ingolstadt, Bavaria.  Her entire family still lives there!  As a result, she has a deep understanding and knowledge of the language and culture.  She loves to incorporate as many cultural facts and traditions as possible in addition to regular grammar and vocabulary studies.  Some of the highlights include celebrating German Week in October; building lanterns for the Sankt Martin's celebration in November; experiencing German Christmas traditions in December; going on a field trip in January; celebrating Fasching and playing German Easter Games in the spring; and playing soccer against other German classes before the end of the semester.  Let's not forget the possibility to host German exchange students and then return the visit over the summer!  
							</div>
							
						</div>
						
						<div class="row">
						
							<div class="col-xs-12 col-sm-6" id="box">
								<!--second pic-->
								<img src="" class="img-responsive">
							</div>
							<div class="col-xs-12 col-sm-6" id="box">
								<!--second info-->
								
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
