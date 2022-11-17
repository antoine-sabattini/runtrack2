<?php

foreach ($_GET as $key => $value) {
  if ($value % 2) {
    echo $value.' est impair<br>';
  } else {
    echo $value.' est pair<br>';
  }
}
 ?>
