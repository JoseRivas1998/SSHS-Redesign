<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
	$path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/google/googleHeader.php";
    include($path);
    ?>
	<title>Santa Susana High School</title>
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
					<div class="section-title">Clubs Page Admin</div>
					<?php
					$path = $_SERVER['DOCUMENT_ROOT'];
				    $path .= "/inc/google/googleProfile.php";
				    include($path);
				    ?>
					<div class="row" id="forms">

						<div class="col-xs-12 col-sm-6">
							<div class="section-title">Add a New Club</div>
							<form role="form" action="javascript:void(0)" id="newForm">
								<div class="form-group">
									<label for="newName" class="control-label">Club Name</label>
									<input type="text" class="form-control" id="newName" name="newName" placeholder="Club Name" value="">
								</div>
								<div class="form-group">
									<label for="newWebsite" class="control-label">Website</label>
									<input type="text" class="form-control" id="newWebsite" name="newWebsite" placeholder="Website URL (If Applicable)" value="">
								</div>
								<div class="form-group">
									<label for="newPresident" class="control-label">President</label>
									<input type="text" class="form-control" id="newPresident" name="newPresident" placeholder="President's Full Name" value="">
								</div>
								<div class="form-group">
									<label for="newAdvisor" class="control-label">Advisor</label>
									<input type="text" class="form-control" id="newAdvisor" name="newAdvisor" placeholder="Advisor's Last Name" value="">
								</div>
								<div class="form-group">
									<label for="newTime" class="control-label">Meeting Time</label>
									<input type="text" class="form-control" id="newTime" name="newTime" placeholder="Meeting Time (If Applicable)" value="">
								</div>
								<div class="form-group">
									<label for="newRoom" class="control-label">Meeting Room</label>
									<input type="text" class="form-control" id="newRoom" name="newRoom" placeholder="Meeting Room (If Applicable)" value="">
								</div>
								<div class="form-group">
									<input type="submit" class="btn btn-primary" value="Send">
								</div>
							</form>
							<div id="newFormOut"></div>
						</div>

						<div class="col-xs-12 col-sm-6">
							<div class="section-title">Edit Existing Club</div>


						</div>

					</div>
				</div>
				<div class="col-xs-12">
					<button class="btn btn-default" onclick="signOut();">Sign Out</button>
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
		var profile = null;
		function onSignIn(googleUser) {
			profile = googleUser.getBasicProfile();
	        var id_token = googleUser.getAuthResponse().id_token;
	        var profileDiv = $("#googleProfile");
	        profileDiv.html("<div class='row'>");
	        profileDiv.append("<img class='img-responsive' src='" + profile.getImageUrl() + "' alt='Profile Image'>");
	        profileDiv.append(profile.getName());
	        profileDiv.append("</div>");
		}
		$("#newForm").submit(function(event) {
		 var auth2 = gapi.auth2.getAuthInstance();
			if(!(auth2.isSignedIn.get()) || profile == null) {
				$("#newFormOut").html("<div class='alert alert-danger'>You Must Be Logged in to Google</div>")
			} else if(profile.getEmail().indexOf("@simivalleyusd.org") > -1) {
				var form = $("#newForm").children();
				console.log("New Name: " + form.find("input[name='newName']").val());
				console.log("New Website: " + form.find("input[name='newName']").val());
				$.ajax({
					type: "POST",
					url: "addClub.php",
					data: {
						"name": form.find("input[name='newName']").val(),
						"website": form.find("input[name='newName']").val(),
						"president": form.find("input[name='newPresident']").val(),
						"advisor": form.find("input[name='newAdvisor']").val(),
						"time": form.find("input[name='newTime']").val(),
						"room": form.find("input[name='newRoom']").val()
					},
					cache: false,
					success: function(data){
						$("#newFormOut").html(data);
					}
				});
			} else {
				$("#newFormOut").html("<div class='alert alert-danger'>Your Email is not a Simi Valley USD account.</div>")
			}
		});
	</script>

</body>

</html>