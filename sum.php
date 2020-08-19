<?php
// 1〜10 までを足した値を返す関数
function sum(){

    // $result は結果を保存する変数
    $result = 0;

    // $i は 1　からはじまり 10 より大きくなるまでループする
    for($i = 1; $i <= 10; $i++){

        // $result に　$i を順番に足していく
        $result = $result+$i;
    }

               // $result を結果として返す
    return $result;
}
echo sum();


function sun(){
  $result = 2;
  $i = $result*2;
  return $i;
}
echo sun();

function f($a,$b) {
    $x = $a+$b;
    return $x;
}



$arr = array(1,3,5,7,9);
function number($arr) {
    $result = 1;
    
    foreach ($arr as $value) {
        $result *= $value;
    }
    return $result;
    echo $result;
}
echo number($arr);
echo "\n";

?>