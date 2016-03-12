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
    <title>Home Section Admin | Santa Susana High School</title>
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
                <div class="section-title">Home Section Admin</div>
                <div class="row" id="forms">
                    <div class="col-sm-6 col-sm-offset-3 col-xs-12">
                      <form role="form" action="javascript:void(0)" id="sectionBoxes">
                        <div class="row">
                          <div class="col-xs-6">
                            <div class="checkbox">
                              <label><input type="checkbox" id="quick" value="" name="quick"><i class="fa fa-link fa-fw"></i> Quick Links</label>
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox" id="whatsNew" value="" name="whatsNew"><i class="fa fa-newspaper-o fa-fw"></i> What's New</label>
                            </div>
                          </div>
                          <div class="col-xs-6">
                            <div class="checkbox">
                              <label><input type="checkbox" id="district" value="" name="district"><i class="fa fa-link fa-fw"></i> District Links</label>
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox" id="aboutUs" value="" name="aboutUs"><i class="fa fa-info fa-fw"></i> About Us</label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <input type="submit" class="btn btn-primary form-control" value="Save">
                        </div>
                      </form>
                      <div id="result"></div>
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
<script src="index.js"></script>
</body>

</html>
