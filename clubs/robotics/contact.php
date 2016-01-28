<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/inc/head.php";
    include($path);
    ?>
    <title>Contact | Robotics Club | Santa Susana High School</title>
    <style>
        h3 {
            margin-top: 0;
        }

        #teacherDesc {
            text-align: right;
        }

        @media (max-width: 640px) {
            .list-group-item {
                font-size: 11px;
            }
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
            $path = $_SERVER["DOCUMENT_ROOT"];
            $path .= "/clubs/robotics/left-nav.php";
            include($path);
            ?>
            <div class="col-xs-12 col-sm-9">
                <div class="section-title">Contact</div>
                <div class="col-xs-12 col-sm-6">
                    <h3>SSHS Robotics Department</h3>
                    <div class="list-group">
                        <a href="http://www.santasusana.org/clubs/robotics/" class="list-group-item">
                            <strong>Website:</strong><br/>
                            www.santasusana.org/clubs/robotics/
                        </a>
                        <a href="mailto:Emily.Lewis@simivalleyusd.org" target="_blank" class="list-group-item">
                            <strong>My Email:</strong><br/>
                            Emily.Lewis@simivalleyusd.org
                        </a>
                        <a class="list-group-item"><strong>Phone:</strong> (805)520-6800</a>
                    </div>
                    <h3>Santa Susana High School</h3>
                    <div class="list-group">
                        <a href="http://www.santasusana.org/" class="list-group-item">
                            <strong>Website:</strong> www.santasusana.org
                        </a>
                        <a class="list-group-item">
                            <strong>Address:</strong><br/>
                            3570 E. Cochran Street<br/>
                            Simi Valley, CA 93063
                        </a>
                        <a class="list-group-item"><strong>Phone:</strong> (805)520-6800</a>
                        <a class="list-group-item"><strong>Fax:</strong> (805)520-6778</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">Lewis, Emily</div>
                        </div>
                        <div class="panel-body">
                            <div class="col-xs-5">
                                <img src="/staff/teachers/img/elewis.jpg" alt="Emily Lewis" class="img-responsive">
                            </div>
                            <div class="col-xs-7" id="teacherDesc">
                                <i>Robotics and Engineering</i><br/>
                                Academy: Technology
                            </div>
                        </div>
                    </div>
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
