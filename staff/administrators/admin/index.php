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
    <title>Administrator Page Admin | Santa Susana High School</title>
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
                <div class="section-title">Administrator Page Admin</div>
                <div class="row" id="forms">
                  <div class="col-xs-12 col-sm-6">
                    <div class="section-title">Add a New Administrator</div>
                      <form role="form" method="post" id="newForm" enctype="multipart/form-data">
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
                          <input type="email" class="form-control" id="newEmail" name="newEmail" placeholder="example@simivalleyusd.org">
                        </div>
                        <div class="form-group">
                          <label for="newImg" class="control-label">Image</label>
                          <input type="file" class="form-control" id="newImg" name="newImg" accept="image/*">
                        </div>
                        <div class="form-group">
                          <label for="newRole" class="control-label">Position<span class="red">*</span></label>
                          <input type="text" class="form-control" id="newRole" name="newRole" placeholder="Position">
                        </div>
                        <div class="form-group">
                          <label for="newLink" class="control-label">Website URL</label>
                          <input type="text" class="form-control" id="newLink" name="newLink" placeholder="http://website.com">
                        </div>
                        <div class="form-group">
                          <label for="newLinkText" class="control-label">Website Link Text</label>
                          <input type="text" class="form-control" id="newLinkText" name="newLinkText" placeholder="website">
                        </div>
                        <div class="form-group">
                          <label for="newOrderNum" class="control-label">Order Number<span class="red">**</span></label>
                          <input type="number" class="form-control" id="newOrderNum" name="newOrderNum" value="1">
                        </div>
                        <div class="form-group">
                          <input type="submit" class="form-control btn btn-primary" value="Send">
                        </div>
                      </form>
                      <div id="newFormOut"></div>
                  </div>
                  <div class="col-xs-12 col-sm-6">
                    <div class="section-title">Edit an Existing Administrator</div>
                      <form role="form" method="post" id="editForm" enctype="multipart/form-data">
                        <div class="form-group">
                          <label for="adminList" class="control-label">Select an Admin to Edit</label>
                          <select name="adminList" id="adminList" class="form-control"></select>
                        </div>
                          <div class="form-group">
                            <label for="editFirstName" class="control-label">First Name<span class="red">*</span></label>
                            <input type="text" class="form-control" id="editFirstName" name="editFirstName" placeholder="First Name">
                          </div>
                          <div class="form-group">
                            <label for="editLastName" class="control-label">Last Name<span class="red">*</span></label>
                            <input type="text" class="form-control" id="editLastName" name="editLastName" placeholder="Last Name">
                          </div>
                          <div class="form-group">
                            <label for="editEmail" class="control-label">Email<span class="red">*</span></label>
                            <input type="email" class="form-control" id="editEmail" name="editEmail" placeholder="example@simivalleyusd.org">
                          </div>
                          <div class="form-group">
                            <label for="editImg" class="control-label">Image</label>
                            <input type="file" class="form-control" id="editImg" name="editImg" accept="image/*">
                          </div>
                          <div class="form-group">
                            <label for="editRole" class="control-label">Position<span class="red">*</span></label>
                            <input type="text" class="form-control" id="editRole" name="editRole" placeholder="Position">
                          </div>
                          <div class="form-group">
                            <label for="editLink" class="control-label">Website URL</label>
                            <input type="text" class="form-control" id="editLink" name="editLink" placeholder="http://website.com">
                          </div>
                          <div class="form-group">
                            <label for="editLinkText" class="control-label">Website Link Text</label>
                            <input type="text" class="form-control" id="editLinkText" name="editLinkText" placeholder="website">
                          </div>
                          <div class="form-group">
                            <label for="editOrderNum" class="control-label">Order Number<span class="red">**</span></label>
                            <input type="number" class="form-control" id="editOrderNum" name="editOrderNum" value="1">
                          </div>
                          <div class="form-group">
                            <img alt="Current Image" id="curImg" class="img-responsive">
                          </div>
                          <div class="form-group">
                            <input type="submit" class="form-control btn btn-primary" value="Send">
                          </div>
                      </form>
                      <div id="editFormOut"></div>
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="red">*Required</div>
                  <div class="red">**Page is sorted by lowest order number to highest, Required</div>
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
