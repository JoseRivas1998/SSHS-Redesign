
<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
	<title>Documents | Santa Susana High School</title>
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
							<div class="section-title">Documents</div>
							<div class="list-group">
								<a href="http://simi-ca.schoolloop.com/file/1279458951517/1400654158237/8954036799391073892.pdf" class="list-group-item" target="_blank">2015-2016 Parents' Rights</a>
								<a href="/resources/downloads/2015-16gradingcalendar.pdf" class="list-group-item" target="_blank">2015-2016 Grading Calendar</a>
								<a href="/resources/downloads/2014-15progresscalendar.pdf" class="list-group-item" target="_blank">2014-2015 Progress Calendar</a>
							</div>
							<h3>Health Forms</h3>
							<div class="list-group">
								<a href="/resources/downloads/emergencycontactinfo.pdf" class="list-group-item" target="_blank">Emergency Contact Info</a>
								<a href="/resources/downloads/healthinfo.pdf" class="list-group-item" target="_blank">Health Information</a>
								<a href="/resources/downloads/Medication_Form-Page_1.pdf" class="list-group-item" target="_blank">Medication Form P1</a>
								<a href="/resources/downloads/Medication_Form-Page_2.pdf" class="list-group-item" target="_blank">Medication Form P2</a>
								<a href="/resources/downloads/Readmission_Crutch-Cast_Form.pdf" class="list-group-item" target="_blank">After-Accident Readmission Form</a>
								<a href="/resources/downloads/medcontractespanol.pdf" class="list-group-item" target="_blank">Medical Contract (Español)</a>
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
