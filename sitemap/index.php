
<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
	<title>Sitemap | Santa Susana High School</title>
	<style>
		.mapContent {
			padding-left: 0;
		}
		.mapContent > li {
			list-style-type: none;
		}
		.mapCol {
			text-align: center;
		}
		.head {
			font-size: 24px;
		}
		.subList > ul > li {
			list-style-type: none;
		}
		.subList > ul {
			padding-left: 0;
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
				<div class="col-xs-12" id="sitemap">
					<div class="section-title">Sitemap</div>
					<div class="col-xs-12 col-sm-6 mapCol">
						<div class="list-group">
							<a class="list-group-item head" href="/students/">Students</a>
							<a href="/students/studentinfo.php" class="list-group-item">Student Info</a>
							<a href="/library/" class="list-group-item">Library</a>
							<a href="/students/seniorsonly.php" class="list-group-item">Seniors Only</a>
							<a href="/counseling" class="list-group-item">Counseling</a>
							<a href="/counseling/ccc.php" class="list-group-item">College and Career Center (CCC)</a>
							<a href="/students/leadership.php" class="list-group-item">Leadership</a>
							<a href="/resources/downloads/SVUSDDiscipline.pdf" class="list-group-item">Discipline Policy</a>
						</div>
						<div class="list-group">
							<a href="" class="list-group-item head">Staff</a>
							<a href="/staff/teachers/" class="list-group-item">Teachers</a>
							<a href="/staff/administrators" class="list-group-item">Administrators</a>
							<a href="/staff/supportStaff" class="list-group-item">Support Staff</a>
						</div>
						<div class="list-group">
							<a href="/parents/" class="list-group-item head">Parents</a>
						</div>	
						<div class="list-group">
							<a href="" class="list-group-item head">Community</a>
							<a href="/community/partnersineducation" class="list-group-item">Partners in Education</a>
						</div>
						<div class="list-group">
							<a class="list-group-item head">Miscellaneous</a>
							<a href="/clubs/" class="list-group-item">Clubs</a>
							<a href="/webmasters/" class="list-group-item">Webmasters</a>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 mapCol">
						<div class="list-group">
							<a class="list-group-item head">Resources</a>
							<a href="/resources/content/speakerseries/" class="list-group-item">Academic Speaker Series</a>
							<a href="/resources/content/performing/" class="list-group-item">Upcoming Performances &amp; Tickets</a>
							<a href="/resources/content/bellschedule.php" class="list-group-item">Bell Schedule</a>
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
