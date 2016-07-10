<?php
$root = $_SERVER["DOCUMENT_ROOT"];

$title = $_POST['title'];
$content = $_POST['content'];
$sidenav = isset($_POST['category']);
if($sidenav) {
  $category = $_POST['category'];
}

$categories = array();
$categories['students'] = "$root/students/left-nav.php";
$categories['parents'] = "$root/parents/left-nav.php";
$categories['staff'] = "$root/staff/left-nav.php";
$categories['community'] = "$root/community/left-nav.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
    <title><?php echo $title ?> | Santa Susana High School</title>
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
          <?php
            if($sidenav) {
              include($categories[$category]);
              echo "<div class=\"col-xs-12 col-sm-9\">";
            } else {
              echo "<div class=\"col-xs-12\">";
            }
            echo "<div class=\"section-title\">$title</div>";
            echo "$content";
            echo "</div>";
          ?>
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
