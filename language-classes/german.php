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
								<h3> About the Class </h3>
								What is German class like at Santa Susana High School?  First of all, Frau Newell is a native of Germany.  She was born and raised in Ingolstadt, Bavaria.  Her entire family still lives there!  As a result, she has a deep understanding and knowledge of the language and culture.  She loves to incorporate as many cultural facts and traditions as possible in addition to regular grammar and vocabulary studies.  Some of the highlights include celebrating German Week in October; building lanterns for the Sankt Martin's celebration in November; experiencing German Christmas traditions in December; going on a field trip in January; celebrating Fasching and playing German Easter Games in the spring; and playing soccer against other German classes before the end of the semester.  Let's not forget the possibility to host German exchange students and then return the visit over the summer!  
							</div>
							
						</div>
						
						<div class="row">
						
							<div class="col-xs-12 col-sm-6" id="box">
								<!--second pic-->
								<img src="" class="img-responsive">
							</div>
							<div class="col-xs-12 col-sm-6" id="box">
								<h3> About the Language </h3>
								<ul>
									<li>It is the official language of Germany, Austria, and Liechtenstein.</li>
									<li>It is an official language of Switzerland, Luxembourg, and Belgium.</li>
									<li>It is spoken in regions of France, Denmark, Romania, Bosnia, Poland, Italy, the Czech Republic, Poland, Russia, and the Ukraine.</li>
									<li>It is among the top ten most spoken languages around the world.</li>
									<li>Americans of German descent make up the single largest ethnic group in America- some 52 million Americans claim German descent</li>
									<li>German grammar is logical and the rules are consistent.</li>
									<li>German pronunciation is very phonetic.  For the most part, what you see in a word is exactly what you get.</li>
									<li>German and English evolved from a common tongue.  In fact, English and German have more words in common than English does with any other language.</li>
									<li>It is the second most commonly used language of the Worldwide Web behind English.</li>
									<li>German is the second most commonly used scientific language in the world. </li>
									<li>Germans are world leaders in engineering.</li>
									<li>Many of the Western world’s most important works of philosophy, literature, music, art history, theology, psychology, chemistry, physics, engineering and medicine are written in German and continue to be produced in German.</li>
								</ul>
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
