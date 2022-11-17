<?php

$a=0;
foreach ($_POST as $var) {
  $a = $a+1;
}
echo 'le nombre dargument POST est : '.$a;

?>
