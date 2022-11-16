<?php
$str = "I'm sorry Dave I'm afraid I can't do that.";

$voyelles = ['a', 'e', 'i', 'I', 'o', 'u', 'y'];

$i = 0;

while (isset($str[$i]) == true){
  foreach ($voyelles as $key => $value){
    if ($str[$i] == $value){
      echo $str[$i];
    }
  }
$i = $i+1;
}

 ?>
