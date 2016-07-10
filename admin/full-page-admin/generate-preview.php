<?php
$root = $_SERVER["DOCUMENT_ROOT"];

$title = "403 Forbidden";
$content = "<p>You do not have access to this page</p>";
$sidenav = false;

if(isset($_POST['title'])) {
  $title = $_POST['title'];
  $content = $_POST['content'];
  $sidenav = isset($_POST['category']);
  if($sidenav) {
    $category = $_POST['category'];
  }
} else {
  $sapi_type = php_sapi_name();
  if (substr($sapi_type, 0, 3) == 'cgi') {
    header("Status: 403 Forbidden");
  } else {
    header("HTTP/1.1 403 Forbidden");
  }
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
    <style>
      body {
        padding-bottom: 50px;
      }
      footer {
        position: fixed;
        bottom: 0px;
        background-color: rgba(0, 0, 0, 0.75);;
        width: 100%;
      }
      footer > .container-fluid {
        color: white;
        text-align: center;
        font-size: 2em;
      }
      #prevTxt {
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      footer > .container-fluid > a {
        color: #fff;
      }
      footer > .container-fluid > a:hover, footer > .container-fluid > a:focus, footer > .container-fluid > a:active {
        color: #ddd;
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

<footer>
  <div class="container-fluid">
    Preview
    <a href="#" class="pull-right" id="closebtn" title="Close Window"><i class="fa fa-times fa-2x"></i></a>
  </div>
</footer>

<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/inc/javascript.php";
include($path);
?>
<script>
  $("#closebtn").click(function(event) {
    event.preventDefault();
    window.close();
  });
</script>
</body>

</html>
