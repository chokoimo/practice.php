<?php 
$arr = array(99,100,1,660,1000,999);
 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
     
    if ($a >= $max_number) {
      $max_number = $a;
      
    }
  }
 echo $max_number;
 echo "\n";
 }
 echo max_array($arr);

 ?>