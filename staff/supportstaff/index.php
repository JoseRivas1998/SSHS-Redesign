
<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
	<title>Support Staff | Santa Susana High School</title>
	<style>
		.support {
			text-align: center;
		}
		@media (max-width: 325px){
			.supportEmail {
				font-size: 12px;
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
				<div class="col-xs-12">
					<div class="section-title">Support Staff</div>
					<?php
						$path = $_SERVER['DOCUMENT_ROOT'];
				    $path .= "/staff/nav.php";
				    include($path);
					?>
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-12 col-sm-4 support">Name</div>
								<div class="col-xs-12 col-sm-4 support">Email</div>
								<div class="col-xs-12 col-sm-4 support">Position</div>
							</div>
						</div>
						<div class="panel-body">
							<div id="loadFromDB"></div>
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
	<script>
		$(document).ready(function() {
			$('#supportStaff').addClass('active');
			$('#loadFromDB').load('loadSupportStaff.php');
		});
	</script>
</body>

</html>
