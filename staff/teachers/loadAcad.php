<?php

$incPath = $_SERVER['DOCUMENT_ROOT'];
$incPath .= "/inc/dbConnect.php";
include($incPath);

$sql = "SELECT * FROM teachers ORDER BY academy, lastName, firstName";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $pAcademy = "";
    $openRow;
    $closeRow;
    $secIndex = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $academy = $row["academy"];
        $id = str_replace(" ", "-", $academy);
        $firstName = $row["firstName"];
        $lastName = $row["lastName"];
        $email = $row["email"];
        $profile = $row["imgPath"];
        if (is_null($profile)) {
            $profile = "pending_staff.png";
        }
        $foundingChair = $row["foundingChair"];
        $departmentChair = $row["departmentChair"];
        $academyChair = $row["academyChair"];
        $class1 = $row["class1"];
        $class2 = $row["class2"];
        $displayClass2 = is_null($class2) !== true;
        $class3 = $row["class3"];
        $displayClass3 = is_null($class3) !== true;
        $class4 = $row["class4"];
        $displayClass4 = is_null($class4) !== true;
        $class5 = $row["class5"];
        $displayClass5 = is_null($class5) !== true;
        $class6 = $row["class6"];
        $displayClass6 = is_null($class6) !== true;
        $class7 = $row["class7"];
        $displayClass7 = is_null($class7) !== true;
        $link1 = $row["link1"];
        $link1Text = $row["link1Text"];
        $notNullLink1 = is_null($link1) !== true;
        $notNullLink1Text = is_null($link1Text) !== true;
        $displayLink1 = $notNullLink1 && $notNullLink1Text;
        $link2 = $row["link2"];
        $link2Text = $row["link2Text"];
        $notNullLink2 = is_null($link2) !== true;
        $notNullLink2Text = is_null($link2Text) !== true;
        $displayLink2 = $notNullLink2 && $notNullLink2Text;
        $link3 = $row["link3"];
        $link3Text = $row["link3Text"];
        $notNullLink3 = is_null($link3) !== true;
        $notNullLink3Text = is_null($link3Text) !== true;
        $displayLink3 = $notNullLink3 && $notNullLink3Text;
        $bioLink = $row["bioLink"];
        $displayBioLink = is_null($bioLink) !== true;

        $newSection = ($academy !== $pAcademy);

        if ($newSection) {
            if (($secIndex - 1) % 2 == 0) {
                echo '</div>';
            }
            $secIndex = 0;
            echo "<div class='section-title' id='$id'>$academy</div>";
        }

        $openRow = $secIndex % 2 == 0;
        $closeRow = ($secIndex - 1) % 2 == 0;

        if ($openRow) {
            echo "<div class='row'>";
        }

        echo "<div class='col-sm-6 col-xs-12'>";
        echo "<div class='panel panel-default'>";
        echo "<div class='panel-heading'>";
        echo "<div class='panel-title'>";
        if ($foundingChair) echo "<i class='fa fa-star founding'></i> ";
        if ($departmentChair) echo "<i class='fa fa-star depart'></i> ";
        if ($academyChair) echo "<i class='fa fa-star acadChair'></i> ";
        echo "$lastName, $firstName</div>";
        echo "</div>";
        echo "<div class='panel-body'>";
        echo "<div class='col-xs-5'>";
        echo "<img src='img/$profile' alt='$firstName $lastName' class='img-responsive'>";
        echo "</div>";
        echo "<div class='col-xs-7' id='profile'>";
        echo "<a href='mailto:$email' target='_blank' id='email'>$email</a><br />";
        echo "<ul class='classes'>";
        echo "<li>$class1";
        if ($displayClass2) {
            echo ",";
        }
        echo "</li>";

        if ($displayClass2) {
            echo "<li>$class2";
            if ($displayClass3) {
                echo ",";
            }
            echo "</li>";
        }

        if ($displayClass3) {
            echo "<li>$class3";
            if ($displayClass4) {
                echo ",";
            }
            echo "</li>";
        }

        if ($displayClass4) {
            echo "<li>$class4";
            if ($displayClass5) {
                echo ",";
            }
            echo "</li>";
        }

        if ($displayClass5) {
            echo "<li>$class5";
            if ($displayClass6) {
                echo ",";
            }
            echo "</li>";
        }

        if ($displayClass6) {
            echo "<li>$class6";
            if ($displayClass6) {
                echo ",";
            }
            echo "</li>";
        }

        if ($displayClass7) {
            echo "<li>$class7";
            echo "</li>";
        }

        echo "</ul>";

        if ($displayLink1) {
            echo "<br /><br />";
            echo "<a href='$link1' target='_blank'>$link1Text</a>";
        }

        if ($displayLink2) {
            echo "<br /><a href='$link2' target='_blank'>$link2Text</a>";
        }

        if ($displayLink3) {
            echo "<br /><a href='$link3' target='_blank'>$link3Text</a>";
        }

        if ($displayBioLink) {
            echo "<br /><br />";
            //bio link output
        }

        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";

        if ($closeRow) {
            echo '</div>';
        }

        $pAcademy = $academy;
        $secIndex++;
    }
    if ($openRow) {
        echo "</div>";
    }
}

mysqli_close($conn);
?>
