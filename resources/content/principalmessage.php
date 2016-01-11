
<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
	<title>Principal's Message | Santa Susana High School</title>
	<style>
		p {
			padding-top: 10px;
			text-indent: 25px;
		}
		#principal {
			padding-top: 0;
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
					<div class="section-title">Principal Wendy Mayea, 2015</div>
					Welcome, Santa Susana High School Parents!

					<p>
						As we begin 2016, I am thrilled that you have joined, or are considering joining, our Santa Susana Family. I hope you experience many of our winter and spring activities, starting with Open House. Networking with other high school parents and supporting our programs through your volunteerism and participation, ensures your positive influence in your child’s education.
					</p>

					<p>
						Santa Susana High School teachers and support staff focus on helping your child succeed at high school and in preparing for life after high school. We are here to nurture and support every student. At the same time, great schools need engaged parents.
					</p>

					<ul>
						<li>Encourage your student to take full advantage of the opportunities at Santa Susana High School.</li>
						<li>Support your child’s participation in clubs and classes with extracurricular activities.</li>
						<li>See that your child is fully engaged in a “major” or “course of study” where experiences beyond the classroom are used to build a resume, qualify for college and scholarships, and gain great letters of recommendation.</li>
						<li>Utilize the range of resources in our Counseling and Career Center for information on summer school and summer programs, college preparation, and career planning.</li>
						<li>Use Aeries to facilitate regular conversation with your child about his/her academic success.</li>
						<li>Talk to your child about consistently asking relevant questions in class, utilizing after class teacher help, attending tutoring after school when needed, and giving and getting help from other classmates.</li>
						<li>E-mail teachers to follow up.</li>
						<li>Volunteer for PTSA or SSPAB. Serve as a PAC Docent.</li>
					</ul>

					<p>
						Let your child know that we will always be there to provide an education where students thrive, to help them meet challenges, and to celebrate the remarkable contributions they are making.
					</p>

					<p>
						Thank you for your work as parents in helping your child discover his/her purpose, pursue his/her unique strengths, and contribute remarkable talents. I am so proud to work with you and to have your child as a Santa Susana High School Troubadour.
					</p>

					<p>Sincerely,</p>

					<p>
							<i>Wendy Mayea</i>
					</p>
					<p id="principal">
						Principal
					</p>

					<p><a href="archivedPrincipalsMessages/">Archived Principal's Messages</a></p>

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
