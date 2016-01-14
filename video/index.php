
<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
	<title>KSSH News | Santa Susana High School</title>
	<style>

	#montage {
		list-style-type: none;
		text-align: center;
		padding-top: 10px;
		padding-bottom: 10px;
		padding-left: 0;
	}
	#montage{
		display: inline-block;
	}
	#montage {
		padding: 10px 10px 10px 10px;
		background-color: rgb(18,138,165);
		color: white;
		border: teal;
		border-radius: 5px;
	    -webkit-transition: all .25s; /* Safari */
	    transition: all .25s;
	}
	#montage:hover {
    	background-color: rgb(11,89,107);
    	text-decoration: none;
	}

	#montageRow {
		padding-bottom: 10px;
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
				<div class="col-xs-12">
					<div class="section-title">KSSH News</div>

					<div class="row" id="montageRow">
						<div class="col-xs-12">
							<a id="montage" href="http://safarisshs.simivalleyusd.org/SAFARI/montage/schoolnews.html">Safari Montage</a>
						</div>
					</div>

					<div class="embed-responsive embed-responsive-16by9" id="pl">
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/videoseries?list=PLY442tuwWhoGNAcJY0Sxuv-jwcXurHBTL" frameborder="0" allowfullscreen></iframe>
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