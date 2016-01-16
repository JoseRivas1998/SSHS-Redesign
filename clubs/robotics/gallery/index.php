
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
				            <ol class="carousel-indicators" id="roboticsInidcators"></ol>
				            <div class="carousel-inner" id="roboticsItems"></div>

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
	<script>

	$(document).ready(function() {
		var dir = "club/";
		var fileextension = ".JPG";
		$.ajax({
		    //This will retrieve the contents of the folder if the folder is configured as 'browsable'
		    url: dir,
		    success: function (data) {
		        //List all .png file names in the page
						var img = 0;
		        $(data).find("a:contains(" + fileextension + ")").each(function () {
		            var filename = this.href.replace(window.location, "");
								if(img == 0) {
									$("#roboticsItems").append('<div class="item active"><img src="' + dir + filename + '" class="img-resonsive carousel-img"></div>');
									$("#roboticsInidcators").append('<li data-target="#roboticsCarousel" data-slide-to="'+ img +'" class="active"></li>');
								} else {
									$("#roboticsItems").append('<div class="item"><img src="' + dir + filename + '" class="img-resonsive carousel-img"></div>');
									$("#roboticsInidcators").append('<li data-target="#roboticsCarousel" data-slide-to="'+ img +'"></li>');
								}
								img++;
		        });
		    }
		});
	});

	</script>
</body>

</html>
