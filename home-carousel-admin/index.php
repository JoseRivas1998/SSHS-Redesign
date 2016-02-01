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
                                <label class="control-label">Image</label>
                                <input type="file" class="form-control" name="newImg" id="newImg" accept="image/png">
                            </div>
                            <div class="form-group">
                                <input type="Submit" class="form-control btn btn-primary" value="Send">
                            </div>
                        </form>
                        <div id="newFormOut"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="section-title">Edit Carousel Image</div>
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
