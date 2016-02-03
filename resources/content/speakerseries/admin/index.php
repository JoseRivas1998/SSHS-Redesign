<?php
include($_SERVER['DOCUMENT_ROOT'] . '/inc/google/loadApi.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
    <title>Academic Distinguished Speaker Series Page Admin | Santa Susana High School</title>
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
                <div class="section-title">Academic Distinguished Speaker Series Page Admin</div>
                <div class="row" id="forms">
                  <div class="col-xs-12 col-sm-6">
                    <div class="section-title">Add Speaker Series</div>
                    <form role="form" method="post" id="addForm" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="newName" class="control-label">Title<span class="red">*</span></label>
                        <input type="text" class="form-control" id="newName" name="newName" placeholder="Title">
                      </div>
                      <div class="form-group">
                        <label for="newPosterThumb" class="control-label">Poster Image File(small)<span class="red">*</span></label>
                        <input type="file" class="form-control" id="newPosterThumb" name="newPosterThumb" accept="image/png">
                      </div>
                      <div class="form-group">
                        <label for="newPosterLarge" class="control-label">Poster PDF(large)<span class="red">*</span></label>
                        <input type="file" class="form-control" id="newPosterLarge" name="newPosterLarge" accept="application/pdf">
                      </div>
                      <div class="form-group">
                        <label for="newDate" class="control-label">Show Date<span class="red">*</span></label>
                        <input type="datetime-local" class="form-control" id="newDate" name="newDate">
                      </div>
                      <div class="form-group">
                        <label for="newLocation" class="control-label">Location<span class="red">*</span></label>
                        <input type="text" class="form-control" id="newLocation" name="newLocation" placeholder="Location">
                      </div>
                      <div class="form-group">
                        <label for="newInfoThumb" class="control-label">Additional Info Thumbnail(small)</label>
                        <input type="text" class="form-control" id="newInfoThumb" name="newInfoThumb" accept="image/png">
                      </div>
                      <div class="form-group">
                        <label for="newInfoLarge" class="control-label">Additional Info PDF(large)</label>
                        <input type="file" class="form-control" id="newInfoLarge" name="newInfoLarge" accept="application/pdf">
                      </div>
                      <div class="form-group">
                        <input type="submit" class="form-control btn btn-primary" value="Send">
                      </div>
                    </form>
                    <div id="newFormOut"></div>
                  </div>
                  <div class="col-xs-12 col-sm-6">
                    <div class="section-title"></div>
                    <form role="form" method="post" id="addForm" enctype="multipart/form-data">

                    </form>
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
