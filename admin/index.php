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
    <title>Admin Pages | Santa Susana High School</title>
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
                <div class="section-title">Admin Pages</div>
                <div class="row">
                  <div class="col-xs-12">
                    <p>
                      Remember to be logged into your @simivalleyusd.org google account when accessing these pages. If a  non approved email tries accessing the pages, they will be redirected to a 404 page.
                    </p>
                    <p>
                      <strong>NOTE:</strong> The website does not keep track of your @simivalleyusd.org password. All login information is handled by directly Google alone.
                    </p>
                    <div class="row">
                      <div class="col-xs-12 col-sm-6">
                        <div class="list-group">
                          <a href="/home-page-admin/" class="list-group-item">Home Page Admin</a>
                          <a href="/home-carousel-admin/" class="list-group-item">Home Carousel Admin</a>
                          <a href="/clubs/admin.php" class="list-group-item">Clubs Admin</a>
                          <a href="/action-bar-admin/" class="list-group-item">Action Bar Banner Admin</a>
                          <a href="/community/partnersineducation/admin/" class="list-group-item">Partners in Education Admin</a>
                          <a href="/resources/content/principalMessageAdmin/" class="list-group-item">Principal Message Admin</a>
                          <a href="./full-page-admin/add-page/" class="list-group-item">Add a Page</a>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-6">
                        <div class="list-group">
                          <a href="/resources/content/performing/admin/" class="list-group-item">Performances Page Admin</a>
                          <a href="/resources/content/speakerseries/admin/" class="list-group-item">Academic Distinguished Speaker Series Page Admin</a>
                          <a href="/staff/administrators/admin/" class="list-group-item">Administrator Page Admin</a>
                          <a href="/staff/supportstaff/admin/" class="list-group-item">Support Staff Admin</a>
                          <a href="/staff/teachers/admin/" class="list-group-item">Teachers Page Admin</a>
                          <a href="/home-section-admin" class="list-group-item">Home Section Admin</a>
                          <a href="./navigation-admin" class="list-group-item">Navigation Admin</a>
                        </div>
                      </div>
                    </div>
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
</body>

</html>
