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
    <title>Principal Message Admin | Santa Susana High School</title>
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
                <div class="section-title">Principal Message Admin</div>
                <div class="row" id="forms">
                  <div class="col-xs-12">
                    <div class="section-title">Add New Message</div>
                    <form role="form" method="post" id="newForm" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="newPublishDate" class="control-label">Publish Date</label>
                        <input type="date" class="form-control" id="newPublishDate" name="newPublishDate">
                      </div>
                      <div class="form-group">
                        <textarea name="newMessage" id="newMessage"></textarea>
                      </div>
                      <div class="form-group">
                        <input type="submit" class="form-control btn btn-primary" value="Send">
                      </div>
                    </form>
                    <div id="newFormOut"></div>
                  </div>
                  <div class="col-xs-12">
                    <div class="section-title">Edit Message</div>
                    <form role="form" method="post" id="editForm" enctype="multipart/form-data">
                      <div class="form-group">
                          <label for="editMessageList" class="control-label">Select Message To Edit</label>
                          <select name="editMessageList" id="editMessageList" class="form-control"></select>
                      </div>
                      <div class="form-group">
                        <label for="editPublishDate" class="control-label">Publish Date</label>
                        <input type="date" class="form-control" id="editPublishDate" name="editPublishDate">
                      </div>
                      <div class="form-group">
                        <textarea name="editMessage" id="editMessage"></textarea>
                      </div>
                      <div class="form-group">
                        <input type="submit" class="form-control btn btn-primary" value="Send">
                      </div>
                    </form>
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
