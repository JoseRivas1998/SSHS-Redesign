
<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
	<title>Upcoming Performances &amp; Tickets | Santa Susana High School</title>
	<style>
		#top {
			text-align: center;
		}
		#top > a {
			padding: 10px;
			background-color: rgb(18,138,165);
			color: white;
			border: teal;
			border-radius: 5px;
		    line-height: 40px;
		    box-shadow: none;
		    -webkit-transition: all .25s; /* Safari */
		    transition: all .25s;
		}
		#top > a:hover, #top > a:focus, #top > a:active {
			text-decoration: none;
			background-color: rgb(11,89,107);
    		box-shadow: 5px 5px 20px rgb(136,136,136);
		    -webkit-transition: all .25s; /* Safari */
		    transition: all .25s;
		}
		.showList {
			padding-left: 0;
			margin-bottom: 0;
		}
		.showList > li {
			list-style-type: none;
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
				<div class="col-xs-12" id="top">
					<div class="section-title">Upcoming Performances &amp; Tickets</div>
					<a href="https://www.vendini.com/ticket-software.html?t=tix&amp;w=f1f8510a3fb659e2555d210b59d7bd33" onclick="window.open('https://www.vendini.com/ticket-software.html?t=tix&amp;w=f1f8510a3fb659e2555d210b59d7bd33', 'order_window', 'width=611,height=510,status=yes,left='+((window.screen.width - 611)/2)+',top='+((window.screen.height - 510)/2.5)).focus();return false;" onmouseover="window.status='Buy Tickets Now!';return true;" onmouseout="window.status='';return true;">Buy Tickets Now</a>
				</div>
				<div id="showsFromDB"></div>
			</div>
		</div>
	</section>

	<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/inc/javascript.php";
	include($path);
	?>
	<script>
		$(document).ready(function(){
			$('#showsFromDB').load('loadShows.php');
		});
	</script>
</body>

</html>