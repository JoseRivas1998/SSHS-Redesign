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
										<img src="" class="img-responsive">
									</div>
								</div>
							</div>
							
						</div>
						
						<div class="row">
						
							<div class="col-xs-12 col-sm-6" id="box">
								<div class="row" id="classAd">
									<div class="col-xs-12 ">
										<!--first pic-->
										<img src="" class="img-responsive">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6" id="box">
								<div class="row" id="classAd">
									<div class="col-xs-12">
										<h3> About the Class</h3>
										<p style="margin-left:25px; margin-right:25px;">
											"I know lecturing students in an effort to transmit valuable knowledge "from a source to a target", is an obsolete approach... Therefore, I strive to make my classes as engaging as possible by remaining open to constructive criticism, encouraging my students to share materials, supporting individual and group research and rewarding curiosity and risk-taking. I strive to build a class with focused students, that is, busy learners. This simple idea cuts across my classroom organization plan and accounts for all the strategies I use to ensure discipline and positive behavior."
										</p>
										<div style="text-align:right;size:">-Alejandra Bonvehi, Spanish Teacher</div>
									</div>
								</div>
							</div>
							
						</div>
						
						<div class="row">
						
							<div class="col-xs-12 col-sm-6" id="box">
								<div class="row" id="classAd">
									<div class="col-xs-12">
										<!--second pic-->
										<img src="" class="img-responsive">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6" id="box">
								<div class="row" id="classAd">
									<div class="col-xs-12">
										<h3> About the Language </h3>
										<ul>
											<li>Spanish is the first language of 390 million people and an official language in 21 countries</li>
											<li>Certain words carry different meanings in different areas</li>
											<li>The pronunciation of Spanish is more consistent than the pronunciation of English</li>
											<li>By 2050, 10 percent of the population will speak Spanish</li>
											<li>Pronunciation differences are minor and are of little consequence</li>
											<li>The United States is in high need of Spanish speaking professionals to comply with the economic needs - at production and consumption level - of a market that is changing its demography</li>
										</ul>
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
