<?php

require('data.php');

$file = fopen("test.txt","a");

foreach ($test as $key => $item) {
  $temp = $item->district."-".$item->amphoe."-".$item->province."-".$item->zipcode;
  echo fwrite($file,'"'.$temp.'",');
}

fclose($file);