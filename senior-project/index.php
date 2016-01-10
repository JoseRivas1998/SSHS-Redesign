
<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
	<title>Senior Project | Santa Susana High School</title>
	<style>
		#btns {
			text-align: center;
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
				<div class="col-sm-3 col-xs-12 side-nav">
					<div class="panel panel-default">
						<div class="panel-heading"><div class="panel-title">Senior Project</div></div>
						<div class="panel-body">
							<div class="list-group">
								<a href="/senior-project" class="list-group-item">Home</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-9 col-xs-12">
					<div class="col-xs-12">
						<div class="section-title">Senior Project</div>
					</div>
					<div class="col-xs-12" id="btns">
						<button class="btn btn-default" id="approvalBtn">Senior Project Approval &amp; Contract</button><br /><br />
						<button class="btn btn-default" id="logBtn">Blank Project Log</button>
					</div>
					<div class="col-xs-12">
						<p>
								On this page you will find all the documents that are needed for senior project completion.
								Seniors, you should be a little more relaxed now that your Senior Project papers have been
								turned in. Remember to pace yourselves and continually work on different aspects of the Senior
								Project so you aren’t overwhelmed right before your turn in dates. At this point you should:
						</p>
						<br/>
						<ul>
								<li>Begin working on the documents required for your portfolio – remember that is the next big
										part of the project that is due.
								</li>
								<li>Be working on the project itself and "logging" your activities in detail.</li>
								<li>Keep in contact with your mentor! If, up to this point you have not kept your mentor abreast
										of your progress, now is the time to get moving. You want to be sure that you receive a good
										letter of recommendation from your mentor and NOT a letter of regret.
								</li>
								<li>Look over the Fieldwork and Mentor Info and Portfolio links of this website to assist you in
										your sr. project endeavor.
								</li>
						</ul>
						<br>
						<br>
						<a href="downloads/seniorprojectparentnight2015-2016.pdf">Senior Project Parent Night</a>
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
	<script>
		$("#approvalBtn").click(function(event) {
			window.open('https://docs.google.com/forms/d/1xteagd7kKmnZsQuMWcm47q-Q8TUrPQxHtEfsAbxbX2I/viewform?usp=send_form');
		});
		$("#logBtn").click(function(event) {
			window.open('http://www.santasusana.org/senior-project/downloads/fieldwork_log.pdf');
		});
	</script>
</body>

</html>
