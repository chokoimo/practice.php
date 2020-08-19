<?php
function sum() {
  
  for ($i=1; $i <= 100; $i++) {
    
    if ( $i%3 == 0 && $i%5 == 0) {
      echo  "FizzBuzz";
    }
    if ( $i%3 == 0) {
      echo  "fizz";
    }
    if ( $i%5 == 0) {
      echo  "buzz";
    }
  echo $i;
  echo "\n";
  }
}
echo sum();


?>