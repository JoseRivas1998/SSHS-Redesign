<?php
$incPath = $_SERVER['DOCUMENT_ROOT'];
$incPath .= "/inc/dbConnect.php";
include($incPath);
$sql = "SELECT * FROM clubs WHERE approved = 1 ";
if ($_GET["name"] == 1) {
    $sql .= "ORDER BY name ";
}
if ($_GET["pres"] == 1) {
    $sql .= "ORDER BY president ";
}
if ($_GET["advis"] == 1) {
    $sql .= "ORDER BY advisor ";
}
if ($_GET["asc"] == 0) {
    $sql .= "desc ";
}
$sql .= "LIMIT 0,100";
$result = mysqli_query($conn, $sql);
echo "<table class='clubs'>";
echo "<tr>";
echo "<td><strong>Club</strong></td>";
echo "<td><strong>President(s)</strong></td>";
echo "<td><strong>Advisor(s)</strong></td>";
echo "<td><strong>Meeting Time</strong></td>";
echo "<td><strong>Room</strong></td>";
echo "</tr>";
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row["name"];
        $website = $row["website"];
        $president = $row["president"];
        $advisor = $row["advisor"];
        $meetingTime = $row["meetingTime"];
        $meetingRoom = $row["meetingRoom"];
        if (is_null($meetingTime)) {
            $meetingTime = "N/A";
        }
        if (is_null($meetingRoom)) {
            $meetingRoom = "N/A";
        }
        echo "<tr>";
        if (is_null($website)) {
            echo "<td>$name</td>";
        } else {
            echo "<td><a href='$website' target='_blank'>$name</a></td>";
        }
        echo "<td>$president</td>";
        echo "<td>$advisor</td>";
        echo "<td>$meetingTime</td>";
        echo "<td>$meetingRoom</td>";
    }
}
echo "</table>";
mysqli_close($conn);
?>
