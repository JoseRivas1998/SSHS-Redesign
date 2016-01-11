
<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
	<title>Archived Principal's Messages | Santa Susana High School</title>
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
					<div class="section-title">Archived Principal's Messages</div>
					<div class="list-group">
						<a href="../principalmessage.php" class="list-group-item">Current Principal Message</a>
						<a href="principalmessage-2015-May.php" class="list-group-item">Principal's Message-2015-May</a>
						<a href="principalmessage-2015-November.php" class="list-group-item">Principal's Message-2015-November</a>
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
