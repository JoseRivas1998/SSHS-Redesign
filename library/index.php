
<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
	<title>Library | Santa Susana High School</title>
	<style>
		.panel-body > .img-responsive {
			margin: auto;
		}
    .paragraph-title {
        font-size: 14px;
        font-weight: bold;
        color: #5CA4B5;
    }
		.center {
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
					<div class="col-xs-12">
						<div class="section-title"><a href="">Welcome To The Santa Susana Library</a></div>
					</div>
					<div class="col-xs-12 col-sm-3">
							<div class="panel panel-default">
								<div class="panel-heading"><div class="panel-title">Digital Resources</div></div>
								<div class="panel-body">
									<div class="list-group">
										<a href="http://destiny.simivalleyusd.org/common/servlet/presenthomeform.do?l2m=Home&tm=Home&l2m=Home" class="list-group-item">Destiny Catalog</a>
										<a href="http://www.galesites.com/menu/index.php?loc=santa" class="list-group-item">Gale Databases</a>
										<a href="http://src.scholastic.com/ecatalog/default.asp?UID=DC5CD0F78DA447E281A308DC0E06D18C&amp;subt=0&amp;Test=NA" class="list-group-item">SRC e-Catalog</a>
										<a href="javascript:void(0)" class="list-group-item" onclick="loadFile('mobileapps.html');">Mobile Apps</a>
										<a href="javascript:void(0)" class="list-group-item" onclick="loadFile('librarywithoutwalls.html');">Library Without Walls</a>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading"><div class="panel-title">Student Resources</div></div>
								<div class="panel-body">
									<div class="list-group">
										<a href="javascript:void(0)" class="list-group-item" onclick="loadFile('resources.html');">Resources</a>
										<a href="javascript:void(0)" class="list-group-item" onclick="loadFile('findyourcollege.html');">Find Your College</a>
										<a href="downloads/owlwebquest2013.pdf" class="list-group-item">OWL Webquest</a>
										<a href="downloads/styleguide.pdf" class="list-group-item">Style Guide</a>
										<a href="javascript:void(0)" class="list-group-item">Research Help</a>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading"><div class="panel-title">Important Documents</div></div>
								<div class="panel-body">
									<div class="list-group">
										<a href="downloads/LibraryPracticeApplication.pdf" class="list-group-item">Library Practice Application</a>
									</div>
								</div>
							</div>
					</div>
					<div class="col-xs-12 col-sm-6" id="library-content"></div>
					<div class="col-xs-12 col-sm-3">
						<div class="panel panel-default">
							<div class="panel-heading"><div class="panel-title">About Us</div></div>
							<div class="panel-body">
								<div class="list-group">
									<a href="downloads/librarystandards.pdf" class="list-group-item">Library Standards</a>
									<a href="javascript:void(0)" class="list-group-item" onclick="loadFile('libraryInfo.html');">Library Information</a>
									<a href="javascript:void(0)" class="list-group-item" onclick="loadFile('librarianscorner.html');">Librarian's Corner</a>
									<a href="javascript:void(0)" class="list-group-item" onclick="loadFile('overview.html');">Book Overview</a>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">Mrs. Forbes</div>
							<div class="panel-body">
								<img src="/staff/teachers/img/forbes.jpg" alt="Mrs. Forbes" class="img-responsive">
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">Mrs. Scott</div>
							<div class="panel-body">
								<img src="/staff/teachers/img/scott.png" alt="Mrs. Scott" class="img-responsive">
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
		loadFile('home.html');
	});
	function loadFile(path) {
		$("#library-content").load('inc/' + path);
	}
	</script>
</body>

</html>
