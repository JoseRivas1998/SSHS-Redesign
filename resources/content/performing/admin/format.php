<?php

function formatTimeFromHtml($time, $addZeroes) {
  $newTime = substr($time, 0, strpos($time, "T")) . " " . substr($time, strpos($time, "T") + 1);
  if($addZeroes) {
    $newTime .= ":00";
  }
  return $newTime;
}

function fileSafe($str) {

  $badChar = array_merge(
          array_map('chr', range(0,31)),
          array("<", ">", ":", '"', "/", "\\", "|", "?", "*"));
  return str_replace($badChar, "", $str);

}

function formatTimeToHtml($time) {
  $newTime = substr($time, 0, strpos($time, " ")) . "T" . substr($time, strpos($time, " ") + 1);
  return $newTime;
}

?>
