
<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
	<title>Teachers | Santa Susana High School</title>
	<style>
		#profile {
			text-align: right;
		}
		@media (max-width: 460px){
			#profile > #email	{
				font-size: 8px;
			}
		}
		@media (min-width: 768px) and (max-width: 1199px) {
			#profile > #email	{
				font-size: 12px;
			}
		}
		#top {
			text-align: center;
		}
		#legend, #teacherArea {
			padding-top: 20px;
		}
		.founding {
			color: rgb(0,255,255);
		}
		.depart {
			color: rgb(232,190,25);
		}
		.acadChair {
			color: rgb(165,35,35);
		}
		.toSections, .classes, #legend > ul {
			padding-left: 0;
			list-style-type: none;
		}
		.toSections > li > a:hover {
			cursor: pointer;
		}
		.toSections > li, .classes > li, #legend > ul li {
			display: inline-block;
			padding-left: 5px;
		}
		#legend > ul {
			margin-bottom: 0;
		}
		#searchDiv {
			padding-top: 20px;
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
					<div class="section-title">Teachers</div>
					<?php
					$path = $_SERVER['DOCUMENT_ROOT'];
				    $path .= "/staff/nav.php";
				    include($path);
					?>
					<div id="top">
						<div id="sortButtons">
							<ul class="buttons">
								<li>
									Sort By: 
								</li>
								<li>
									<a onclick="loadAcademy();" id="acadBtn">Academy</a>
								</li>
								<li>
									<a onclick="loadAlphabet();" id="alphaBtn">Alphabet</a>
								</li>
							</ul>
						</div>
						<div id="shortcuts"></div>
						<div id="legend">
							<ul>
								<li><i class="fa fa-star founding"></i> = Founding Teacher </li>
								<li><i class="fa fa-star depart"></i> = Department Chair </li>
								<li><i class="fa fa-star acadChair"></i> = Academy Chair</li>
							</ul>
						</div>
						<div id="searchDiv">
							<form class="form-inline" role="form" action="javascript:void()" id="searchF" name="serchF" onsubmit="if(this.searchT.value!=null &amp;&amp; this.searchT.value!='')parent.findString(this.searchT.value);return false;">
	                            <div class="form-group">
	                            	<input type="text" id="searchT" name="searchT" class="form-control" >
	                            </div>
	                            <div class="form-group">
	                            	<input type="submit" id="searchB" name="searchB" value="Search" class="form-control" >
	                            </div>
	                            <div class="text-danger" id="formError"></div>
	                        </form>
						</div>
					</div>
					<div id="teacherArea"></div>
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
        function scrollToID(letter) {
            var scroll = $("#" + letter).offset().top;
            var bottom = $(document).height();
            var time = 1563.96 * (scroll / bottom);
            console.log("Scroll: " + scroll + ", Bottom: " + bottom + ", Time: " + time);
            $('html, body').animate({
                scrollTop: scroll
            }, time);
        }
    </script>
    <script>
        var TRange = null;

        function findString(str) {
            document.getElementById("formError").style.display = "none";
            if (parseInt(navigator.appVersion) < 4) return;
            var strFound;
            if (window.find(str)) {

                // CODE FOR BROWSERS THAT SUPPORT window.find

                strFound = self.find(str);
                if (!strFound) {
                    strFound = self.find(str, 0, 1);
                    while (self.find(str, 0, 1)) continue;
                }
            }
            else if (navigator.appName.indexOf("Microsoft") != -1) {

                // EXPLORER-SPECIFIC CODE

                if (TRange != null) {
                    TRange.collapse(false);
                    strFound = TRange.findText(str);
                    if (strFound) TRange.select();
                }
                if (TRange == null || strFound == 0) {
                    TRange = self.document.body.createTextRange();
                    strFound = TRange.findText(str);
                    if (strFound) TRange.select();
                }
            }
            else if (navigator.appName == "Opera") {
                document.getElementById("formError").innerHTML = "Opera browsers not supported, sorry...";
                document.getElementById("formError").style.display = "inline";
                return;
            }
            if (!strFound) {
                document.getElementById("formError").innerHTML = "\"" + str + "\" not found";
                document.getElementById("formError").style.display = "inline";
            }
            return;
        }
    </script>
	<script>
		$(document).ready(function() {
			$('#teach').addClass('active');
			loadAcademy();
		});
		function loadAcademy() {
			$('#shortcuts').load('academyNav.html');
			$('#teacherArea').load('loadAcad.php');
			$('#alphaBtn').removeClass('active');
			$('#acadBtn').addClass('active');
		}
		function loadAlphabet() {
			$('#shortcuts').load('alphabetNav.html');
			$('#teacherArea').load('loadAlpha.php');
			$('#acadBtn').removeClass('active');
			$('#alphaBtn').addClass('active');
		}
	</script>
</body>

</html>