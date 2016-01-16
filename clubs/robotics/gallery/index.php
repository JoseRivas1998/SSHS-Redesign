
<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
	<title>Gallery | Robotics Club | Santa Susana High School</title>
	<style>
		#roboticsCarousel {
			height: 100%;
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
				$path = $_SERVER["DOCUMENT_ROOT"];
				$path .= "/clubs/robotics/left-nav.php";
				include($path);
				?>
				<div class="col-xs-12 col-sm-9">
					<div class="section-title">Picture Gallery</div>
					<div class="embed-responsive embed-responsive-16by9" id="embedCarousel">
				    <div class="embed-responsive-item">
				        <div id="roboticsCarousel" class="carousel slide">
				            <ol class="carousel-indicators" id="roboticsInidcators">
											<li data-target="#roboticsCarousel" data-slide-to="0" class="active"></li>
											<li data-target="#roboticsCarousel" data-slide-to="1"></li>
											<li data-target="#roboticsCarousel" data-slide-to="2"></li>
											<li data-target="#roboticsCarousel" data-slide-to="3"></li>
											<li data-target="#roboticsCarousel" data-slide-to="4"></li>
											<li data-target="#roboticsCarousel" data-slide-to="5"></li>
											<li data-target="#roboticsCarousel" data-slide-to="6"></li>
											<li data-target="#roboticsCarousel" data-slide-to="7"></li>
											<li data-target="#roboticsCarousel" data-slide-to="8"></li>
											<li data-target="#roboticsCarousel" data-slide-to="9"></li>
											<li data-target="#roboticsCarousel" data-slide-to="10"></li>
											<li data-target="#roboticsCarousel" data-slide-to="11"></li>
											<li data-target="#roboticsCarousel" data-slide-to="12"></li>
											<li data-target="#roboticsCarousel" data-slide-to="13"></li>
				            	<li data-target="#roboticsCarousel" data-slide-to="14"></li>
				            </ol>
				            <div class="carousel-inner" id="roboticsItems">
				            	<div class="item active"><img src="club/club1.JPG" class="img-resonsive carousel-img"></div>
											<div class="item"><img src="club/club1.JPG" class="img-resonsive carousel-img"></div>
											<div class="item"><img src="club/club2.JPG" class="img-resonsive carousel-img"></div>
											<div class="item"><img src="club/club3.JPG" class="img-resonsive carousel-img"></div>
											<div class="item"><img src="club/club4.JPG" class="img-resonsive carousel-img"></div>
											<div class="item"><img src="club/club5.JPG" class="img-resonsive carousel-img"></div>
											<div class="item"><img src="club/club6.JPG" class="img-resonsive carousel-img"></div>
											<div class="item"><img src="club/club7.JPG" class="img-resonsive carousel-img"></div>
											<div class="item"><img src="club/club8.JPG" class="img-resonsive carousel-img"></div>
											<div class="item"><img src="club/club9.JPG" class="img-resonsive carousel-img"></div>
											<div class="item"><img src="club/club10.JPG" class="img-resonsive carousel-img"></div>
											<div class="item"><img src="club/club11.JPG" class="img-resonsive carousel-img"></div>
											<div class="item"><img src="club/club12.JPG" class="img-resonsive carousel-img"></div>
											<div class="item"><img src="club/club13.JPG" class="img-resonsive carousel-img"></div>
											<div class="item"><img src="club/club14.JPG" class="img-resonsive carousel-img"></div>
					            <div class="item"><img src="club/club15.JPG" class="img-resonsive carousel-img"></div>
				            </div>

				            <a href="#roboticsCarousel" class="carousel-control left home" data-slide="prev">
				                <span class="icon-prev"></span>
				            </a>

				            <a href="#roboticsCarousel" class="carousel-control right home" data-slide="next">
				                <span class="icon-next"></span>
				            </a>

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
