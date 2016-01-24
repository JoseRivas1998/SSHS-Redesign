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
	<title>Club Admins | Santa Susana High School</title>
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
									<label for="newName" class="control-label">Club Name<span id="red">*</span></label>
									<input type="text" class="form-control" id="newName" name="newName" placeholder="Club Name" value="">
								</div>
								<div class="form-group">
									<label for="newWebsite" class="control-label">Website</label>
									<input type="text" class="form-control" id="newWebsite" name="newWebsite" placeholder="Website URL (If Applicable)" value="">
								</div>
								<div class="form-group">
									<label for="newPresident" class="control-label">President<span id="red">*</span></label>
									<input type="text" class="form-control" id="newPresident" name="newPresident" placeholder="President's Full Name" value="">
								</div>
								<div class="form-group">
									<label for="newAdvisor" class="control-label">Advisor<span id="red">*</span></label>
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
							<span id="red">*Required</span>
							<div id="newFormOut"></div>
						</div>

						<div class="col-xs-12 col-sm-6">
							<div class="section-title">Edit Existing Club</div>
							<form role="form" action="javascript:void(0)" id="editForm">
								<div class="form-group">
									<label for="clubList" class="control-label">Select A Club to Edit</label>
									<select id="clubList" class="form-control"></select>
								</div>
								<div class="form-group">
									<label for="editName" class="control-label">Club Name<span id="red">*</span></label>
									<input type="text" class="form-control" id="editName" name="editName" placeholder="Club Name" value="">
								</div>
								<div class="form-group">
									<label for="editWebsite" class="control-label">Website</label>
									<input type="text" class="form-control" id="editWebsite" name="editWebsite" placeholder="Website URL (If Applicable)" value="">
								</div>
								<div class="form-group">
									<label for="editPresident" class="control-label">President<span id="red">*</span></label>
									<input type="text" class="form-control" id="editPresident" name="editPresident" placeholder="President's Full Name" value="">
								</div>
								<div class="form-group">
									<label for="editAdvisor" class="control-label">Advisor<span id="red">*</span></label>
									<input type="text" class="form-control" id="editAdvisor" name="editAdvisor" placeholder="Advisor's Last Name" value="">
								</div>
								<div class="form-group">
									<label for="editTime" class="control-label">Meeting Time</label>
									<input type="text" class="form-control" id="editTime" name="editTime" placeholder="Meeting Time (If Applicable)" value="">
								</div>
								<div class="form-group">
									<label for="editRoom" class="control-label">Meeting Room</label>
									<input type="text" class="form-control" id="editRoom" name="editRoom" placeholder="Meeting Room (If Applicable)" value="">
								</div>
								<div class="checkbox">
									<label><input type="checkbox" value="" id="editApproved" name="editApproved">Approved</label>
								</div>
								<div class="form-group">
									<input type="submit" class="btn btn-primary" value="Send">
								</div>
							</form>
							<span id="red">*Required</span>
							<div id="editFormOut"></div>
							<button class="btn btn-default" id="deleteClub">Delete Club</button>
							<button class="btn btn-default" id="refreshClub">Refresh Club List</button>
						</div>

					</div>
				</div>
				<div class="col-xs-12" id="signOutBtn">
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
	<script src="admin.js"></script>

</body>

</html>
