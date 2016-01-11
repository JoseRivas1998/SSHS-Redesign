
<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
	<title>Graduation | Santa Susana High School</title>
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
					<div class="section-title">Graduation</div>
					<h3>Graduation Requirements</h3>
					<p>
						Counselors meet with students each year to make sure they are on track to graduate. The final responsibility for meeting graduation requirements rests with the students and his/her parents.
					</p>
					<br/>
					<p>
						See below for graduation requirements, a graduation check form, and a math and science flow chart.
					</p>

					<div class="list-group">
						<a href="downloads/SSHSgradReq.pdf" class="list-group-item" target="_blank">SSHS Graduation Requirements</a>
						<a href="downloads/A-GonTrack.pdf" class="list-group-item" target="_blank">Am I On Track to Graduate?</a>
						<a href="downloads/SSHS-Graduation-Check.pdf" class="list-group-item" target="_blank">Graduation Check Form</a>
					</div>
					<h3>Counselor Graduation Checks</h3>
					<p>
						12th grade students review a copy of their Senior Graduation Check in their senior TAP class 1st and 2nd semester. A copy is mailed home to all senior parents at 1st semester and again at 2nd semester. Seniors and Juniors at risk of not graduating on time are invited to a meeting with their counselor 1st semester. 10th and 9th graders who are short credits to graduate will receive notification by mail 2nd semester.
					</p>
					<h3>5 Year Plan Class Presentations</h3>
					<p>
						In December, counselors visit all 9th grade English classes to walk students through filling out a 5 Year Plan. All students will receive and review a copy of our high school graduation requirements, four year college requirements & Math and Science Flow Charts. Students are given a copy to take home. The 5 year plan is for planning purposes and is not set in stone.
					</p>
					<h3>Academies, Certificates and Requirements</h3>
					<div class="list-group">
						<a href="/resources/content/schoolandacademy/academics/" class="list-group-item" target="_blank">Academics</a>
						<a href="/resources/content/schoolandacademy/technical/" class="list-group-item" target="_blank">Technical Arts</a>
						<a href="/resources/content/schoolandacademy/thearts/" class="list-group-item" target="_blank">Visual and Performing Arts</a>
					</div>
					<h3>Registration</h3>
					<p>
						In February, counselors will visit English classes to explain how to fill out the registration forms for next year's classes. Each student receives a master class list, and a Math and Science Flow Chart. High school graduation requirements and four year college requirements are reviewed. Students later meet individually with their counselor to answer questions and double check the classes that were selected. Class selections are final and there is no guarantee that we will be able to accommodate any changes. The flow chart will help you determine what Math or Science classes to take. The master class list outlines all course numbers and classes SSHS will offer next year including which classes are Fine Art, Practical Art, semester, and full year classes.
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
