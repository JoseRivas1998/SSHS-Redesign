
<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
	<title>Parent Info | Santa Susana High School</title>
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
					<div class="row">
						<div class="col-xs-12">
							<div class="section-title">Parent Info</div>
							<div class="col-xs-12 col-sm-6">
								<div class="list-group">
									<a href="/resources/content/bellschedule.php" class="list-group-item">Bell Schedule</a>
									<a href="/counseling/grades.php" class="list-group-item">Grades/Report Card Dates</a>
									<a href="/resources/content/principalmessage.php" class="list-group-item">Principal's Message</a>
									<a href="http://simi-ca.schoolloop.com/file/1279458951517/1400654158237/8954036799391073892.pdf" class="list-group-item" target="_blank">2015-2016 Parents' Rights Handbook</a>
									<a href="http://webstores.activenetwork.com/school-software/santa_susana_high_sc/" class="list-group-item" target="_blank">Student Store</a>
									<a href="http://simivalleyusd.org" class="list-group-item" target="_blank">Simi Valley Unified School District</a>
									<a href="/counseling" class="list-group-item">Counseling</a>
									<a href="/staff" class="list-group-item">Staff Page</a>
									<a href="/resources/downloads/AttendanceLetter2014.pdf" class="list-group-item" target="_blank">Attendance Letter</a>
									<a href="/resources/content/wasc/WASC_Report_2012.pdf" class="list-group-item" target="_blank">WASC Report 2012</a>
									<a href="/resources/content/wasc/WASC-midterm-20122015.pdf" class="list-group-item" target="_blank">WASC Mid-Term 2012-2015 Report</a>
									<a href="/resources/downloads/falloutletter.pdf" class="list-group-item" target="_blank">Fallout Letter</a>
									<a href="/resources/downloads/falloutletterspanish.pdf" class="list-group-item" target="_blank">Fallout Letter (En Español)</a>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								Health Office - Barb Kiely<br />
								<a href="mailto:barbara.kiely@simivalleyusd.org" target="_blank">barbara.kiely@simivalleyusd.org</a><br/>
								805.520.6800 x 3721<br/>
								<br/>
								Attendance Office - Yvette Shuster<br/>
								<a href="mailto:yvette.shuster@simivalleyusd.org" target="_blank">yvette.shuster@simivalleyusd.org</a><br />
								805.520.6800 x 3719
								<h3>Controlled Substance Information</h3>
								<div class="list-group">
									<a href="http://www.simi.k12.ca.us/cms/page_view?d=x&piid=&vpid=1332656427635" class="list-group-item" target="_blank">Substance Abuse and Intervention</a>
									<a href="http://www.simi.k12.ca.us/cms/page_view?d=x&piid=&vpid=1335084125029" class="list-group-item" target="_blank">Heroin Task Force Contact Information</a>
									<a href="http://simi-ca.schoolloop.com/resource/resources?d=x&id=1335085114528&group_id=1279458925921" class="list-group-item" target="_blank">Heroin Task Force Resources</a>
									<a href="http://www.simivalleyusd.org/drugreporting" class="list-group-item" target="_blank">Anonymous Drug Reporting Form</a>
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
