<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
    <title>Calendar | Game Development Club | Santa Susana High School</title>
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
              include('left-nav.php');
            ?>
            <div class="col-xs-12 col-sm-9">
              <div class="section-title">Calendar</div>
              <div class="embed-responsive embed-responsive-4by3">
                  <iframe class="embed-responsive-item" src="https://www.google.com/calendar/embed?showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=uioi5lkseqrvd0f7ecrvnh91gc%40group.calendar.google.com&amp;color=%2328754E&amp;ctz=America%2FLos_Angeles" style=" border-width:0 " frameborder="0" scrolling="no"></iframe>
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
