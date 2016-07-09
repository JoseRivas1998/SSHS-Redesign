<?php
function backupPage($sqlconn, $pageid) {
  $getsql = "SELECT * FROM fullPages WHERE id = $pageid LIMIT 1";
  $getresult = mysqli_query($sqlconn, $getsql);
  if(mysqli_num_rows($getresult) > 0) {
    while($getrow = mysqli_fetch_assoc($getresult)) {
      $butitle = mysqli_real_escape_string($sqlconn, $getrow['title']);
      $bupath = mysqli_real_escape_string($sqlconn, $getrow['path']);
      $bucontent = mysqli_real_escape_string($sqlconn, $getrow['content']);
      $backupsql = "INSERT INTO fullPagesBackups (pageId, title, `path`, content";
      if(is_null($getrow['sidenav']) !== true) {
        $backupsql .= ", sidenav";
      }
      $backupsql .= ") VALUES ($pageid, '$butitle', '$bupath', '$bucontent'";
      if(is_null($getrow['sidenav']) !== true) {
        $backupsql .= ", '" . $getrow['sidenav'] . "'";
      }
      $backupsql .= ")";
      if(mysqli_query($sqlconn, $backupsql)) {
        return true;
      }
    }
  }
  return false;
}

?>
