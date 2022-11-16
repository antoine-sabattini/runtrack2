<?php

$nombres = [200, 204, 173, 98, 171, 404, 459];
foreach ($nombres as $key => $value) {
  if ($value % 2) {
    echo $value.' est impair<br>';
  } else {
    echo $value.' est pair<br>';
  }

}

 ?>
