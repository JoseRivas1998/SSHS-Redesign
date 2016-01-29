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
                                <label for="newWebsite" class="control-label">Website<span class="red">*</span></label>
                                <input type="text" class="form-control" name="newWebsite" id="newWebsite" placeholder="Partner Website(If Applicable)">
                            </div>
                            <div class="form-group">
                                <label for="newImg" class="control-label">Image<span class="red">*</span></label>
                                <input type="file" class="form-control" name="newImg" id="newImg" accept="image/*">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary form-control">
                            </div>
                        </form>
                        <span class="red">* Required</span>
                        <div id="newFormOut"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="section-title">Edit Partner In Education</div>
                        <form role="form" method="post" id="editForm" enctype="multipart/form-data">
                          <div class="form-group">
                            <label for="partnerList" class="control-label">Select a Partner to Edit</label>
                            <select name="partnerList" id="partnerList" class="form-control"></select>
                          </div>
                            <div class="form-group">
                                <label for="editPartner" class="control-label">Partner Name<span class="red">*</span></label>
                                <input type="text" class="form-control" name="editPartner" id="editPartner" placeholder="Partner Name">
                            </div>
                            <div class="form-group">
                                <label for="editWebsite" class="control-label">Website<span class="red">*</span></label>
                                <input type="text" class="form-control" name="editWebsite" id="editWebsite" placeholder="Partner Website(If Applicable)">
                            </div>
                            <div class="form-group">
                                <label for="editImg" class="control-label">Image<span class="red">*</span></label>
                                <input type="file" class="form-control" name="editImg" id="editImg" accept="image/*">
                            </div>
                            <div class="form-group" id="editCurrentImg"></div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary form-control">
                            </div>
                        </form>
                        <div id="editFormOut"></div>
                        <button class="btn btn-default" id="deletePartner">Delete Partner</button>
                        <button class="btn btn-default" id="refreshPartnerList">Refresh Partner List</button>
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
