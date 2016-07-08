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
    <title>Navigation Admin | Santa Susana High School</title>
    <style>
      .form-inline {
        margin-bottom: 15px;
      }
    </style>
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
              <div class="section-title">Navigation Admin</div>
            </div>
            <div class="col-xs-12">
              <form action="javascript:void(0)" id="navForm">
                <div class="form-group">
                  <label for="category" class="congrol-label">Category</label>
                  <select name="category" id="category" class="form-control">
                    <option value="students" selected>Students</option>
                    <option value="parents">Parents</option>
                    <option value="staff">Staff</option>
                    <option value="community">Community</option>
                  </select>
                </div>
                <div id="navFormLinks"></div>
                <div class="form-group">
                  <button class="btn btn-success" title="Add Link" onclick="addLink()" type="button"><i class="fa fa-plus"></i></button>
                </div>
                <div class="form-group">
                  <input type="submit" class="form-control btn btn-primary" value="Save">
                </div>
              </form>
              <div id="navFormOut"></div>
            </div>
            <div class="col-xs-12">
              <p class="text-danger"><strong>Make sure to save before changing category!</strong></p>
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
