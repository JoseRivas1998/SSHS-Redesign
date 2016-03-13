<?php
function logChange($email, $sql, $adminPage, $tableEdited) {
  $hostname = getenv("HTTP_DB_HOST");
  $username = getenv("HTTP_DB_USER");
  $password = getenv("HTTP_DB_PASS");
  $database = "websshs";
  $conn1 = mysqli_connect($hostname, $username, $password, $database);
  $getNameSql = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
  $userName = "Unknown";
  $result = mysqli_query($conn1, $getNameSql);
  if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)) {
      $userName = $row["name"];
    }
  }
  $to = "j.rodriguez-rivas@simivalleyusd.org";
  $from = "Admin Page Logger";
  $subject = $adminPage . " Admin Used";
  $date = date(DATE_RFC2822);
  $mailBody = "$userName edited the table '$tableEdited' on $date\nThe sql was as follows:\n$sql";
  mail($to, $subject, $mailBody, $from);
  file_put_contents($_SERVER["DOCUMENT_ROOT"] . "/adminLog.txt", "\n[$date]\t$userName\t$tableEdited\t$sql", FILE_APPEND);
  mysqli_close($conn1);
}
?>
