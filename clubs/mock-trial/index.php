
<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
	<title>Mock Trial Club | Santa Susana High School</title>
	<style>
		#content-container {
			text-align: center;
		}
		ul {
			list-style-type: none;
			padding-left: 0;
		}
		.img-responsive {
			margin: auto;
		}
		@media (max-width: 768px) {
			#bottomImages > .col-xs-12 > .img-responsive {
				padding-top: 5px;
			}
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
				<div class="col-xs-12">
					<div class="section-title">Santa Susana's Mock Trial Team Wins Championship</div>
					<p>
						<strong>We congratulate the Mock Trial team and Mr. Matthew Long, their adviser, on their win!</strong>
					</p>
					<p>
						<a href="http://empiremocktrial.org/empire-san-francisco-2014-recap/" target="_blank">http://empiremocktrial.org/empire-san-francisco-2014-recap/</a>
					</p>
					<p>
						Here's the team:
					</p>
					<ul>
						<li><strong>Vivian Han (Captain)</strong></li>
						<li><strong>Megan Jones (Captain)</strong></li>
						<li>Punita Patel</li>
						<li>Nikol Spaho</li>
						<li>Emily Jo Wharry</li>
						<li>Michael Sarkisian</li>
						<li>Daniel Cauffiel</li>
						<li>Chanal Nualsumlee</li>
						<li>Jennifer Jones</li>
						<li>Riley Shapiro</li>
					</ul>
					<img src="images/team.jpg" alt="Mock Trial Team" class="img-responsive">
					<p>
						<strong>Outstanding Attorney Awards were presented to Nikol Spaho and Megan Jones</strong>
					</p>
					<div class="row" id="bottomImages">
						<div class="col-xs-12 col-sm-6">
							<img src="images/nikol-spaho-and-trophy.jpg" alt="Nikol Spaho and Trophy" class="img-responsive">
						</div>
						<div class="col-xs-12 col-sm-6">
							<img src="images/megan-jones-and-trophy.jpg" alt="Megan Jones and Trophy" class="img-responsive">
						</div>
					</div>
					<p>
						The team won the championship round on Monday, November 25th<br />
						in U.S. District Court, Northern District of California in San Francisco<br />
						against Clarke Central High School, from Georgia<br />
						The Honorable Judge Saundra Brown Armstrong presided over this match
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
