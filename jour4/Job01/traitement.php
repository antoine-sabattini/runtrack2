<?php

$a=0;
foreach ($_GET as $var) {
  $a = $a+1;
}
echo 'le nombre dargument GET est : '.$a;

?>
