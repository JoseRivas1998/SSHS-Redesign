
<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
	<title>School and Academy Structure | Santa Susana High School</title>
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
					$path = $_SERVER["DOCUMENT_ROOT"];
					$path .= "/resources/content/schoolandacademy/left-nav.php";
					include($path);
				?>
				<div class="col-xs-12 col-sm-9">
					<div class="section-title">School and Academy Structure</div>
					<h3>Mission Statement</h3>
					<p>
						A fundamental component of attending Santa Susana High School is that students have a focus area for their studies. All SSHS students have chosen to be here and have an interest in one or more of our three Schools:
					</p>
					<p>
						Within the School of Academics, Technical Arts, and Performing Arts, students choose an Academy and/or Emphasis Area in which they focus on a specially designed four-year course of study. The academy-specific curricular paths combine interest-based courses with core academic foundations to guide students through their high school careers. This "school-within-a-school" model allows students to pursue their academic interests as they build skills for a postsecondary life. Our personalized school structure attracts students and their families to the school, who benefit from the smaller learning communities of Santa Susana High School.
					</p>
					<p>
						The unique nine-period schedule facilitates the School and Academy structure, providing additional opportunities and alternatives, and caters to the specialization of SSHS students. Created to manage the student need to coordinate core academic classes with co-curricular programs and career preparation courses, extended day scheduling is a fundamental support system for student learning at Santa Susana High School. Selected courses are offered during our earliest period of the day (Period 1 from 6:55 am - 7:55 am), while others are offered after "normal school hours" (Periods 8 & 9 from 3:05 pm - 5:05 pm). This flexibility allows students to maximize their opportunities to learn at SSHS as they balance academics with interest-based electives.
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
