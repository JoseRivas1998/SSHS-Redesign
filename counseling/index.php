
<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
	<title>Counseling | Santa Susana High School</title>
	<style>
		.counselor {
			text-align: center;
		}
		.counselor > .img-responsive {
			margin: auto;
		}
		@media (min-width: 986px) and (max-width: 1198px) {
			.counselor > a {
				font-size: 10px;
			}
		}
		@media (min-width: 767px) and (max-width: 985px) {
			.counselor > a {
				font-size: 8px;
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
				<?php
				include('left-nav.php');
			 	?>
				<div class="col-xs-12 col-sm-9">
					<div class="section-title">Counseling</div>
					<h2>FAQ</h2>
					<p>
						For many questions you may have, there is now a FAQ available <a href="downloads/FAQ.pdf" target="_blank">here</a>.
					</p>
					<h2>11th Grade Review</h2>
					<p>
						The Counseling Department presented the "11th Grade Review” to the Junior English classes on November 19th and 20th. This presentation talked about high school graduation requirements and college requirements. A copy of their transcript was also provided to them. Please take a moment to review <a href="downloads/11th_grade_Review_2014.pdf" target="_blank" >the PowerPoint</a> along with the handouts provided to your student.
					</p>
					<h2>5 Year Plans</h2>
					<p>
						The Counseling Department presented the "5 Year Plans" to freshman students on October 29th and 30th during their English class. Please take a moment to review <a href="downloads/9th_grade_presentations_2014-2015.pdf" target="_blank">the PowerPoint</a> along with the handouts provided to your student.
					</p>
					<h2>Want to Talk to a Counselor?</h2>
					<p>
						Parents please call or email your counselor for an appointment. Students can come in to the counseling office before school, after school, or in between classes. If your counselor is not available fill out a slip for the counselor to call you in. If it is an emergency contact any administrator immediately.
					</p>
					<p>
						If your student is interested in taking any outside classes for Enrichment or Credit Recovery purposes please contact your student's Counselor for approval. Not all HS courses and College courses will be approved for high school credit.
					</p>
					<h2>Adult Education</h2>
					<p>
						Did you know that our very own Simi Valley Adult School and Career Institute not only helps students with credit recovery, but also has <strong>outstanding vocational programs</strong> that can lead to great employment opportunities? Whether you are looking for training in your chosen career or planning to go to a four year college but need to have a rewarding job to help you pay for school, the Simi Valley Adult School and Career Institute has so much to offer. It is one of the best kept educational secrets of Simi Valley! Classes are <strong>very affordable</strong> and include programs such as Cosmetology, Business &amp; Computer Technology, Machinist, Welding, Dental Technology, as well as extensive medical programs including Emergency Medical Technician (EMT), Medical Assistant, Pharmacy Technician, Nursing Assistant, Home Health Aide, Surgical Technologist, and Respiratory Therapist. To learn more, check out the <a href="http://simivalleyadultschool.org/" target="_blank">Simi Valley Adult School and Career Institute Website</a>. Course catalogs and brochures for their popular medical programs are available in our College and Career Center, as well. Thanks for helping support our community of Simi Valley!
					</p>
					<h2>Facebook Page!</h2>
					<p>
						We have created a Facebook page to help students and parents connect with our counselors. Click <a href="https://www.facebook.com/SSHSCounseling" target="_blank">here</a> to go check it out!
					</p>
					<h3>The Counselors</h3>
					<div class="row">
						<div class="col-xs-12 col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title">Ms. Thompson</div>
								</div>
								<div class="panel-body counselor">
									<img src="/img/content/pending_resized.png" alt="Mrs. Thompson" class="img-responsive">
									<a href="mailto:devyn.thompson@simivalleyusd.org" target="_blank">devyn.thompson@simivalleyusd.org</a><br />
									A-Gl
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title">Mrs. Melanson</div>
								</div>
								<div class="panel-body counselor">
									<img src="/staff/administrators/img/melanson.png" alt="Mrs. Melanson" class="img-responsive">
									<a href="mailto:jody.melanson@simivalleyusd.org" target="_blank">jody.melanson@simivalleyusd.org</a><br />
									Go-N
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title">Ms. McMahon</div>
								</div>
								<div class="panel-body counselor">
									<img src="/staff/administrators/img/mcmahon.png" alt="Ms. McMahon" class="img-responsive">
									<a href="mailto:kelsey.mcmahon@simivalleyusd.org" target="_blank">kelsey.mcmahon@simivalleyusd.org</a><br />
									O-Z
								</div>
							</div>
						</div>
					</div>
					<p>
						We are here to help and/or answer questions. Please stop by at lunch.
					</p>
					<h3>Course Catalog</h3>
					<p>
						Click <a href="/resources/downloads/2015CourseCatalog.pdf">here</a> to download / view the 2015-16 Course Catalog.<br />
						Click <a href="/resources/downloads/2015CourseCatalogCEC.pdf">here</a> to download / view the 2015-16 Course Catalog of the Career Education Center.
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
