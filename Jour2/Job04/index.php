<?php
for ($i=0; $i < 100 ; $i++) {
  if ($i % 3 && $i % 5) {
    echo 'FizzBuzz<br>';
  }
  elseif ($i % 3) {
    echo "Fizz";
  }
  elseif ($i % 5) {
    echo "Buzz";
  }
  else {
    echo $i.'<br>';
  }
}


 ?>
