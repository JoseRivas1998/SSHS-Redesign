<?php
$incPath = $_SERVER['DOCUMENT_ROOT'];
$incPath .= "/inc/dbConnect.php";
include($incPath);

$sql = "SELECT * FROM administrators ORDER BY sortingNumber";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

        $firstName = $row["firstName"];
        $lastName = $row["lastName"];
        $email = $row["email"];
        $imgPath = $row["imgPath"];
        if (is_null($imgPath)) {
            $imgPath = "pending_staff.png";
        }
        $role = $row["role"];
        $link1 = $row["link1"];
        $link1Text = $row["link1Text"];
        $notNullLink1 = is_null($link1) !== true;
        $notNullLink1Text = is_null($link1Text) !== true;
        $displayLink = $notNullLink1 && $notNullLink1Text;
        $bio = $row["bio"];
        $displayBio = is_null($bio) !== true;

        echo "<div class='col-sm-6 col-xs-12'>";
        echo "<div class='panel panel-default'>";
        echo "<div class='panel-heading'>";
        echo "<div class='panel-title'>$lastName, $firstName</div>";
        echo "</div>";
        echo "<div class='panel-body'>";
        echo "<div class='col-xs-6'>";
        echo "<img src='img/$imgPath' alt='$firstName $lastName' class='img-responsive'>";
        echo "</div>";
        echo "<div class='col-xs-6' id='profile'>";
        echo "<a href='mailto:$email' target='_blank' id='email'>$email</a><br />";
        echo "$role<br />";
        if ($displayLink) {
            echo "<a href='$link1'>$link1Text</a>";
        }
        if ($displayBio) {
            echo "<br /><br /><a href='$bio'>Biography</a>";
        }
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";


    }
}


mysqli_close($conn);

?>
