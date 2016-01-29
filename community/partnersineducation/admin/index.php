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
    <title>Partners in Education Admin | Santa Susana High School</title>
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
                <div class="section-title">Partners in Education Admin</div>
                <div class="row" id="forms">
                    <div class="col-xs-12 col-sm-6">
                        <div class="section-title">Add Partner In Education</div>
                        <form role="form" method="post" id="addForm" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="newPartner" class="control-label">Partner Name<span class="red">*</span></label>
                                <input type="text" class="form-control" name="newPartner" id="newPartner" placeholder="Partner Name">
                            </div>
                            <div class="form-group">
                                <label for="newWebsite" class="control-label">Website</label>
                                <input type="text" class="form-control" name="newWebsite" id="newWebsite" placeholder="Partner Website(If Applicable)">
                            </div>
                            <div class="form-group">
                                <label for="newImg" class="control-label">Image</label>
                                <input type="file" class="form-control" name="newImg" id="newImg" accept="image/*">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary form-control">
                            </div>
                        </form>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="section-title">Add Partner In Education</div>
                        <form role="form" action="javascript:void(0)" id="addForm">
                        
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
