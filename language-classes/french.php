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
								<div class="row" id="classAd">
									<div class = "col-xs-12">
										<img src="sitepics/french1.jpg" class="img-responsive">
									</div>
								</div>
							</div>
							
						</div>
						
						<div class="row">
						
							<div class="col-xs-12 col-sm-6" id="box">
								<div class="row" id="classAd">
									<div class="col-xs-12 ">
										<!--first pic-->
										<img src="sitepics/french2.jpg" class="img-responsive">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6" id="box">
								<div class="row" id="classAd">
									<div class="col-xs-12">
										<h3> About the Class </h3>
										<p>As a language teacher, I believe it is vital to create an atmosphere where students feel comfortable speaking French and have fun doing so.  I try to diversify my teaching methods so that students are not just sitting at their desk, but are creating, speaking, and using the language in an authentic way.  Students should be using the language on day one! </p>
									</div>
								</div>
							</div>
							
						</div>
						
						<div class="row">
						
							<div class="col-xs-12 col-sm-6" id="box">
								<div class="row" id="classAd">
									<div class="col-xs-12">
										<!--second pic-->
										<img src="sitepics/french3.jpg" class="img-responsive">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6" id="box">
								<div class="row" id="classAd">
									<div class="col-xs-12">
										<!--second info-->
										<h3> About the Language </h3>
										<p>Whenever people think of France, they think of baguettes and the Eiffel Tower.  Yet, there is so much more to this beautiful language than that.  There are over 50 countries where French is spoken all over the world (e.g. Haiti, Senegal, Belgium, Tahiti, Canada, Morocco).  When a student learns French, they are learning not only how to communicate with people, but they are also learning the cultural perspectives and differences of these people.  Learning and appreciating differences is vital in this global world.  If we want to create global citizens, we must give our students the opportunity to learn different languages and cultures. </p>  
									</div>
								</div>
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
