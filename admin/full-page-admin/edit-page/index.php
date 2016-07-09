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
    <title>Edit a Page | Santa Susana High School</title>
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
                <div class="section-title">Edit a Page</div>
                <div class="row" id="forms">
                  <div class="col-xs-12">
                    <form role="form" action="javascript:void(0)" id="editPageForm" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="pageList" class="control-label">Select a Page</label>
                        <select name="pageList" id="pageList" class="form-control"></select>
                      </div>
                      <div class="form-group">
                        <label for="title" class="control-label">Page Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                      </div>
                      <div class="form-group">
                        <label for="path">Page Path</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="path-addon-1">https://santasusana.org/</span>
                          <input type="text" class="form-control" id="path" name="path" aria-describedby="path-addon-1" placeholder="path/to/page">
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="button" id="addPath">Add Path From Title</button>
                          </span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="content" class="control-label">Content</label>
                        <textarea name="content" id="content"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="" class="">Add Left Navigation For Category</label>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <input type="checkbox" id="catCheck">
                          </span>
                          <select name="category" id="category" class="form-control">
                            <option value="students" selected>Students</option>
                            <option value="parents">Parents</option>
                            <option value="staff">Staff</option>
                            <option value="community">Community</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <input type="submit" class="form-control btn btn-primary" value="Save Changes">
                      </div>
                      <div class="form-group">
                        <buton class="form-control btn btn-danger" type="button" id="deletePage">Delete Page</buton>
                      </div>
                    </form>
                    <div id="formOut"></div>
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
