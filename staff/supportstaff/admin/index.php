
<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/inc/head.php";
  include($path);
	$path = $_SERVER["DOCUMENT_ROOT"];
	$path .= "/inc/google/googleHeader.php";
	include($path);
  ?>
	<title>Support Staff Admin | Santa Susana High School</title>
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
					<div class="section-title">Support Staff Admin</div>
					<?php
					$path = $_SERVER['DOCUMENT_ROOT'];
			    $path .= "/inc/google/googleProfile.php";
			    include($path);
			    ?>
					<div class="row" id="forms">
						<div class="col-xs-12 col-sm-6">
							<div class="section-title">Add New Support Staff Member</div>
							<form role="form" action="javascript:void(0)" id="newForm">
								<div class="form-group">
									<label for="newFirstName" class="control-label">First Name<span class="red">*</span></label>
									<input type="text" class="form-control" id="newFirstName" name="newFirstName" placeholder="First Name">
								</div>
								<div class="form-group">
									<label for="newLastName" class="control-label">Last Name<span class="red">*</span></label>
									<input type="text" class="form-control" id="newLastName" name="newLastName" placeholder="Last Name">
								</div>
								<div class="form-group">
									<label for="newEmail" class="control-label">Email<span class="red">*</span></label>
									<input type="email" class="form-control" id="newEmail" name="newEmail" placeholder="email@simivalleyusd.org">
								</div>
								<div class="form-group">
									<label for="newRole" class="control-label">Position<span class="red">*</span></label>
									<input type="text" class="form-control" id="newRole" name="newRole" placeholder="Position">
								</div>
								<div class="form-group">
									<input type="submit" class="form-control btn btn-primary" value="Send">
								</div>
							</form>
							<span class="red">* Required</span>
							<div id="newFormOut"></div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="section-title">Adit Existing Support Staff Member</div>
							<!-- <form role="form" action="javascript:void(0)" id="">

							</form> -->
						</div>
					</div>
					<div class="col-xs-12" id="signOutBtn">
						<button class="btn btn-default" onclick="signOut();">Sign Out</button>
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
	<script src="admin.js"></script>
</body>

</html>
