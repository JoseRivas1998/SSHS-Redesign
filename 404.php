
<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
	<title>Santa Susana High School</title>
	<style>
		#link:hover {
			cursor: default;
		}
		#link {
			cursor: default;
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
					<div class="section-title">404 Not Found</div>
					<p>
						Unfortunately, the page <a id="link"></a> could not be found, please check the url and try again.
					</p>
					<button class="btn btn-default" onclick="history.back(-1);"><i class="fa fa-arrow-left"></i> Return to Previous Page</button>
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
		$("#link").text($(location).attr("href"));
	});

	</script>
</body>

</html>