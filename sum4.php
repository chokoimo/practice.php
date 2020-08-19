<?php 



for($i = 1; $i <= 100; $i++){

  
  if ($i%3 == 0 && $i%5 == 0){
    echo "FizzBuzz";
    echo "\n";
  }
  elseif ($i%3 == 0){
    echo "fizz";
    echo "\n";
    
  }
  elseif ($i%5 == 0){
    echo "buzz";
    echo "\n";
    
  }
  else{
    echo $i;
    echo "\n";
  }
  
}
?>