
<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
	<title>Testing | Santa Susana High School</title>
	<style>
		p {
			padding-top: 10px;
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
				<div class="col-xs-12 col-sm-9">
					<div class="section-title">Testing</div>
					<h2>PSAT/SAT</h2>
					Were you unable to attend the PSAT Score Report Night?<br/>
					The following will provide useful information:<br/>

					<p>
						Preparing for a <a href="downloads/PreparingforaBrighterFutureCollegeHandbook.pdf" target="_blank">Brighter Future College Handbook</a> or <a href="https://quickstart.collegeboard.org/posweb/login.jsp?excmpid=CBF1-ST-1-PSATreport" target="_blank">Collegeboard.org</a>and use your Online Access Code-found on the inside bottom page of your Student Copy. A message from the Library Media Center:
					</p>
					<p>
						For students who are looking for additional study help for the PSAT test, SSHS has an electronic database that includes access to: an online study book for the PSAT test, a timed practice test, and additional study help resources, articles and links. The resources in this database are free to SSHS students. For information about this database, please stop by or contact the SSHS Library Media Center.
					</p>
					<p>
						For more information, practice, and registration for the SAT and PSAT, click <a href="http://www.collegeboard.org/" target="_blank">here</a>.
					</p>
					<p>
						To register for the ACT test, click, <a href="http://www.cde.ca.gov/ta/tg/hs/" target="_blank">here</a>.
					</p>
					<h3>CAHSEE</h3>
					For information and practice tests for the CAHSEE, click <a href="http://www.cde.ca.gov/ta/tg/hs/" target="_blank">here</a>.
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
