<?php

$a = 3;
$b = 7;
echo $a+$b;



$array_month = ["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"];
echo $array_month[7];

$hello = "Hello";
$name = "Sano";
$world = "’s World!";
echo $hello,$name,$world;

$tech_boost = "tech";
$tech_boost .="boost";
echo $tech_boost;

$valu_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"];
  
echo $valu_2018["December"];


$name = "sano";
if ($name == "sano"){
  echo "私は".$name."です。";
} else {
  echo "あなたの名前ではありません";
}

$total=0;
for ($i=1; $i < 10000; $i++) {
  $total += $i;
}
echo $total;


$fruits = array ("apple","orange","peach","grape","banana");

foreach($fruits as $fruit){
  echo "好きな食べ物は" . $fruit;
  echo "\n";
}


$start = 1;
$end = 100;

for($i = $start; $i < $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
  }
}

?>