<?php
$root = $_SERVER["DOCUMENT_ROOT"];

include($root . "/inc/dbConnect.php");

$responseCode = "404 Not Found";
$title = "404 Not Found";
$content = "<p>Unfortunately, the page <a id=\"link\"></a> could not be found, please check the url and try again.</p><button class=\"btn btn-default\" onclick=\"history.back(-1);\"><i class=\"fa fa-arrow-left\"></i> Return to Previous Page</button>";
$sidenav = false;

$categories = array();
$categories['students'] = "$root/students/left-nav.php";
$categories['parents'] = "$root/parents/left-nav.php";
$categories['staff'] = "$root/staff/left-nav.php";
$categories['community'] = "$root/community/left-nav.php";

$requestURI = $_SERVER["REQUEST_URI"];

$sql = "SELECT * FROM fullPages WHERE `path` = '$requestURI' LIMIT 1";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    $responseCode = "200 OK";
    $title = $row['title'];
    $content = $row["content"];
    $sidenav = is_null($row['sidenav']) !== true;
    if($sidenav) {
      $category = $row['sidenav'];
    }
  }
}

$sapi_type = php_sapi_name();
if (substr($sapi_type, 0, 3) == 'cgi') {
    header("Status: $responseCode");
  } else {
    header("HTTP/1.1 $responseCode");
  }

mysqli_close($conn);

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
        #link:hover {
            cursor: default;
        }

        #link {
            cursor: default;
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

<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/inc/javascript.php";
include($path);
?>
<script>

    $(document).ready(function () {
        $("#link").text($(location).attr("href"));
    });

</script>
</body>

</html>
