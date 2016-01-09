
<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
	<title>Clubs | Santa Susana High School</title>
	<style>
		
		
		.clubs {	
			border: 1px solid rgb(161,161,161);
			border-radius: 5px;
			border-spacing:5px;
			margin: auto;
			width: 100%;
			border-collapse: separate;
		}

		.clubs td > strong {
			font-size: 16px;
			color: rgb(18,138,165);
		}

		.clubs tr {	
			border: none;
    		-webkit-transition: background-color .5s; /* Safari */
    		transition: background-color .5s;
    		background-color: inherit;
		}
		.clubs tr:hover {	
    		-webkit-transition: background-color .5s; /* Safari */
    		transition: background-color .5s;
			background-color: rgba(255, 255, 255,.75);
		}
		.clubs td {
			border: 1px solid rgb(161,161,161);
			border-radius: 5px;
			padding: 5px;
		}
		.table-responsive {
			border: none;
		}
		#sorting {
			text-align: center;
			padding-bottom: 10px;
		}
		.buttons {
			padding-bottom: 0;
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
					<div class="section-title">Clubs</div>
					<div class="col-xs-12" id="sorting">
						<div class="col-xs-12 col-sm-6">
							<ul class="buttons">
								<li>
									Sort By: 
								</li>
								<li>
									<a id="sortName" class="active">Name</a>
								</li>
								<li>
									<a id="sortPresident">President</a>
								</li>
								<li>
									<a id="sortAdvisor">Advisor</a>
								</li>
							</ul>
						</div>
						<div class="col-xs-12 col-sm-6">
							<ul class="buttons">
								<li>
									Order By:
								</li>
								<li>
									<a id="sortAsc" class="active">Ascending</a>
								</li>
								<li>
									<a id="sortDesc">Descending</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="table-responsive">
							<div id="clubsTable"></div>
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
	    var name = 1;
	    var asc = 1;
	    var pres = 0;
	    var advis = 0;
	    $(document).ready(function() {
	        load();
	    });
	    function load() {
	        $('#clubsTable').load('loadClubs.php?name=' + name + '&pres=' + pres + '&advis=' + advis + '&asc=' + asc);
	    }
	    $('#sortName').on('click', function(){loadName();});
	    $('#sortPresident').on('click', function(){loadPresident();});
	    $('#sortAdvisor').on('click', function(){loadAdvisor();});
	    $('#sortAsc').on('click', function(){loadAscending();});
	    $('#sortDesc').on('click', function(){loadDescending();});
	    function loadName() {
	        name = 1;
	        pres = 0;
	        advis = 0;
	        $('#sortName').addClass('active');
	        $('#sortPresident').removeClass('active');
	        $('#sortAdvisor').removeClass('active');
	        load();
	    }
	    function loadPresident() {
	        pres = 1;
	        name = 0;
	        advis = 0;
	        $('#sortPresident').addClass('active');
	        $('#sortName').removeClass('active');
	        $('#sortAdvisor').removeClass('active');
	        load();
	    }
	    function loadAdvisor() {
	        advis = 1;
	        pres = 0;
	        name = 0;
	        $('#sortAdvisor').addClass('active');
	        $('#sortName').removeClass('active');
	        $('#sortPresident').removeClass('active');
	        load();
	    }
	    function loadAscending() {
	        asc = 1;
	        $('#sortAsc').addClass('active');
	        $('#sortDesc').removeClass('active');
	        load();
	    }
	    function loadDescending() {
	        asc = 0;
	        $('#sortDesc').addClass('active');
	        $('#sortAsc').removeClass('active');
	        load();
	    }
	</script>
</body>

</html>