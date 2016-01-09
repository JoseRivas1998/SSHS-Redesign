
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
					<div class="col-xs-6 mapCol">
						<h3><a href="/students/">Students</a></h3>
						<ul class="mapContent">
							<li><a href="/students/studentinfo.php">Student Info</a></li>
							<li><a href="/students/tap.php">Tap</a></li>
							<!-- <li><a href="/students/">Library</a></li>
							<li><a href="/students/">Seniors Only</a></li>
							<li><a href="/students/">Counseling</a></li>
							<li><a href="/students/">Leadership</a></li>
							<li><a href="/students/">Discipline Policy</a></li> -->
						</ul>
						<h3>Staff</h3>
						<ul class="mapContent">
							<li><a href="/staff/teachers/">Teachers</a></li>
							<li><a href="/staff/administrators">Administrators</a></li>
							<li><a href="/staff/supportStaff">Support Staff</a></li>
						</ul>
						<h3>Community</h3>
						<ul class="mapContent">
							<li><a href="/community/partnersineducation">Partners in Education</a></li>
						</ul>
						<h3>Miscellaneous</h3>
						<ul class="mapContent">
							<li><a href="/clubs/">Clubs</a></li>
							<li><a href="/webmasters/">Webmasters</a></li>
						</ul>
					</div>
					<div class="col-xs-6 mapCol">
						<h3>Resources</h3>
						<ul class="mapContent">
							<li><a href="/resources/content/speakerseries/">Academic Speaker Series</a></li>
							<li><a href="/resources/content/performing/">Upcoming Performances &amp; Tickets</a></li>
						</ul>
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
