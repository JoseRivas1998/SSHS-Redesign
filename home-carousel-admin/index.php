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
    <title>Home Carousel Admin | Santa Susana High School</title>
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
                <div class="section-title">Home Carousel Admin</div>
                <div class="row" id="forms">
                    <div class="col-xs-12 col-sm-6">
                        <div class="section-title">Add Carousel Image</div>
                        <form role="form" method="post" id="addForm" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="newImg" class="control-label">Image</label>
                                <input type="file" class="form-control" name="newImg" id="newImg" accept="image/png">
                            </div>
                            <div class="form-group">
                                <input type="Submit" class="form-control btn btn-primary" value="Send">
                            </div>
                        </form>
                        <div id="newFormOut"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="section-title">Update Carousel Image</div>
                        <form role="form" method="post" id="editForm" enctype="multipart/form-data">
                          <div class="form-group">
                            <label for="carouselList" class="control-label">Select a Carousel Image to Update</label>
                            <select name="carouselList" id="carouselList" class="form-control"></select>
                          </div>
                          <div class="form-group">
                              <label for="editImg" class="control-label">Image</label>
                              <input type="file" class="form-control" name="editImg" id="editImg" accept="image/png">
                          </div>
                          <div class="form-group">
                            <img alt="Current Image" id="curImg" class="img-responsive">
                          </div>
                          <div class="form-group">
                              <input type="Submit" class="form-control btn btn-primary" value="Send">
                          </div>
                        </form>
                        <div id="editFormOut"></div>
                        <button class="btn btn-default" id="deleteCarousel">Delete Carousel</button>
                        <button class="btn btn-default" id="refreshList">Refresh Carousel List</button>
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
