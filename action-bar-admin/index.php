
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
	<title>Action Bar Banner Admin | Santa Susana High School</title>
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
					<div class="section-title">Action Bar Banner Admin</div>
					<?php
					$path = $_SERVER['DOCUMENT_ROOT'];
			    $path .= "/inc/google/googleProfile.php";
			    include($path);
			    ?>
					<div class="row">
						<div class="col-xs-12 col-sm-7">
							<img src="example.png" alt="Example Action Bar" class="img-responsive">
						</div>
					</div>
					<div class="row" id="forms">
						<div class="col-xs-12 col-sm-6">
							<div class="section-title">Add New Action Bar</div>
							<form role="form" action="javascript:void(0)" id="newForm">
								<div class="form-group">
									<label for="barText" class="control-label">Action Bar Text<span class="red">*</span></label>
									<input type="text" id="barText" name="barText" class="form-control" placeholder="Action Bar Text">
								</div>
								<div class="form-group">
									<label for="barLink" class="control-label">Action Bar Link</label>
									<input type="text" id="barLink" name="barLink" class="form-control" placeholder="Action Bar Link (If Applicable)">
								</div>
								<div class="form-group">
									<label for="publish" class="control-label">Publish Date (When bar will first appear)<span class="red">*</span></label>
									<input type="datetime-local" id="publish" name="publish" class="form-control">
								</div>
								<div class="form-group">
									<label for="showUntil" class="control-label">Show Until (When bar will no longer appear)<span class="red">*</span></label>
									<input type="datetime-local" id="showUntil" name="showUntil" class="form-control">
								</div>
								<div class="form-group">
									<input type="submit" class="btn btn-primary form-control" value="Send">
								</div>
							</form>
							<span class="red">*Required</span>
							<div id="newFormOut"></div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="section-title">Exit Existing Action Bar</div>
							<form role="form" action="javascript:void(0)" id="editForm">
								<div class="form-group">
									<label for="editBarList" class="control-label">Select Action Bar To Edit</label>
									<select name="editBarList" id="editBarList" class="form-control"></select>
								</div>
								<div class="form-group">
									<label for="editText" class="control-label">Action Bar Text<span class="red">*</span></label>
									<input type="text" id="editText" name="editText" class="form-control" placeholder="Action Bar Text">
								</div>
								<div class="form-group">
									<label for="editLink" class="control-label">Action Bar Link</label>
									<input type="text" id="editLink" name="editLink" class="form-control" placeholder="Action Bar Link (If Applicable)">
								</div>
								<div class="form-group">
									<label for="editPublish" class="control-label">Publish Date (When bar will first appear)<span class="red">*</span></label>
									<input type="datetime-local" id="editPublish" name="editPublish" class="form-control">
								</div>
								<div class="form-group">
									<label for="editShowUntil" class="control-label">Show Until (When bar will no longer appear)<span class="red">*</span></label>
									<input type="datetime-local" id="editShowUntil" name="editShowUntil" class="form-control">
								</div>
								<div class="form-group">
									<input type="submit" class="btn btn-primary form-control" value="Send">
								</div>
							</form>
							<span class="red">*Required</span>
							<div id="editFormOut"></div>
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
