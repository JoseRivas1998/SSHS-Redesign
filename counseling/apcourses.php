
<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
	<title>AP Courses | Santa Susana High School</title>
	<style>
		.course {
			font-weight: bold;
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
				include('left-nav.php')
				?>
				<div class="col-xs-12 col-sm-9">
					<div class="section-title">AP Courses</div>
					<p>
						<strong>
							This page contains the anticipated AP course offerings available at Santa Susana High School for the 2015-2016 school year. Please note that the availability of these courses may change based on interest and enrollment. Also note that courses marked with an asterisk (*) are only offered biannually. If you have any questions, you are encouraged to contact your counselor.
						</strong>
					</p>
					<div class="section-title">Math and Computer Science</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title">AP Calculus</div>
								</div>
								<div class="panel-body course">
									Reinstein<br/>
									More information on <a href="https://apstudent.collegeboard.org/apcourse/ap-calculus-ab" target="_blank">Calculus AB</a> and <a href="https://apstudent.collegeboard.org/apcourse/ap-calculus-bc" target="_blank">Calculus BC</a>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title">AP Statistics</div>
								</div>
								<div class="panel-body course">
									Ramstedt<br/>
									More information on <a href="https://apstudent.collegeboard.org/apcourse/ap-statistics" target="_blank">AP Statistics</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title">AP Computer Science</div>
								</div>
								<div class="panel-body course">
									Clarke<br/>
									More information on <a href="https://apstudent.collegeboard.org/apcourse/ap-computer-science-a" target="_blank">AP Computer Science</a>
								</div>
							</div>
						</div>
					</div>

					<div class="section-title">Science</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title">AP Biology*</div>
								</div>
								<div class="panel-body course">
									Kelly<br/>
									More information on <a href="https://apstudent.collegeboard.org/apcourse/ap-biology" target="_blank">AP Biology</a>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title">AP Environmental Science*</div>
								</div>
								<div class="panel-body course">
									Thaler<br/>
									More information on <a href="https://apstudent.collegeboard.org/apcourse/ap-environmental-science" target="_blank">AP Environmental Science</a><br/>
									More information on <a href="http://sshschemistry.webspawner.com/apesapenvironme/" target="_blank">AP Environmental Science (Webspawner)</a><br/>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title">AP Physics</div>
								</div>
								<div class="panel-body course">
									Ramstedt<br/>
									More information on <a href="https://apstudent.collegeboard.org/apcourse/ap-physics-1" target="_blank">AP Physics</a>
								</div>
							</div>
						</div>
					</div>

					<div class="section-title">English</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title">AP English 11</div>
								</div>
								<div class="panel-body course">
									(Language and Composition) - Carrigan<br/>
									More information on <a href="https://apstudent.collegeboard.org/apcourse/ap-english-language-and-composition" target="_blank">AP English</a>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title">AP English 12</div>
								</div>
								<div class="panel-body course">
									(Literature and Composition) - Bradley &amp; White<br/>
									More information on <a href="https://apstudent.collegeboard.org/apcourse/ap-english-language-and-composition" target="_blank">AP English</a>
								</div>
							</div>
						</div>
					</div>

					<div class="section-title">History and Social Science</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title">AP Human Geography</div>
								</div>
								<div class="panel-body course">
									Long<br/>
									More information on <a href="https://apstudent.collegeboard.org/apcourse/ap-human-geography" target="_blank">AP Human Geography</a>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title">AP Psychology</div>
								</div>
								<div class="panel-body course">
									Tauber<br/>
									More information on <a href="https://apstudent.collegeboard.org/apcourse/ap-psychology" target="_blank">AP Psychology</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title">AP World History</div>
								</div>
								<div class="panel-body course">
									Davis<br/>
									More information on <a href="https://apstudent.collegeboard.org/apcourse/ap-world-history" target="_blank">AP World History</a>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title">AP US History</div>
								</div>
								<div class="panel-body course">
									Wolloch<br/>
									More information on <a href="https://apstudent.collegeboard.org/apcourse/ap-world-history" target="_blank">AP US History</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title">AP Government and Politics</div>
								</div>
								<div class="panel-body course">
									AP Government and Politics<br/>
									More information on <a href="https://apstudent.collegeboard.org/apcourse/ap-united-states-government-and-politics" target="_blank">AP Government and Politics</a>
								</div>
							</div>
						</div>
					</div>

					<div class="section-title">Art</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title">AP Studio Art (Photo)</div>
								</div>
								<div class="panel-body course">
									M. Abbe<br/>
									More information on <a href="https://apstudent.collegeboard.org/apcourse/ap-studio-art-2-d-design" target="_blank">AP Studio Art 2D Design</a>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title">AP Studio Art</div>
								</div>
								<div class="panel-body course">
									Cherbak-Boyd &amp; Shulte
									<ul>
										<li>
											More information on <a href="https://apstudent.collegeboard.org/apcourse/ap-studio-art-2-d-design" target="_blank">AP Studio Art 2D Design</a>
										</li>
										<li>
											More information on <a href="https://apstudent.collegeboard.org/apcourse/ap-studio-art-3-d-design" target="_blank">AP Studio Art 3D Design</a>
										</li>
										<li>
											More information on <a href="https://apstudent.collegeboard.org/apcourse/ap-studio-art-drawing" target="_blank">AP Studio Art Drawing</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="section-title">World Language and Culture</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title">AP French Language and Culture</div>
								</div>
								<div class="panel-body course">
									Mortine<br/>
									More information on <a href="https://apstudent.collegeboard.org/apcourse/ap-french-language-and-culture" target="_blank">AP French Language and Culture</a>
								</div>
							</div>
						</div>
					</div>

					<div class="section-title">For 2015-2016</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title">AP Chemistry*</div>
								</div>
								<div class="panel-body course">
									Thaler
									<ul>
										<li>
											More information on <a href="https://apstudent.collegeboard.org/apcourse/ap-chemistry" target="_blank">AP Chemistry</a>
										</li>
										<li>
											More information on <a href="http://sshschemistry.webspawner.com/sshsapchemistry/" target="_blank">AP Chemistry (Webspawner)</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title">Honors Anatomy</div>
								</div>
								<div class="panel-body course">
									Aiello
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
