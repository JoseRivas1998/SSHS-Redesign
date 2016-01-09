
<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
	<title>Administrators | Santa Susana High School</title>
	<style>
		#profile {
			text-align: right;
		}
		@media (max-width: 511px){
			#profile > #email	{
				font-size: 8px;
			}
		}
		@media (min-width: 768px) and (max-width: 995px) {
			#profile > #email	{
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
				<div class="col-xs-12">
					<div class="section-title">Administrators</div>
					<?php
					$path = $_SERVER['DOCUMENT_ROOT'];
				    $path .= "/staff/nav.php";
				    include($path);
					?>
				</div>
				<div id="loadFromDB"></div>
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
			$('#admin').addClass('active');
			$('#loadFromDB').load('loadAdmins.php');
		});
	</script>
</body>

</html>
