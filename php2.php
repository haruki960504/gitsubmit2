<?php
//echo 'hello php!';

/*
$name = "haruki";
if($name == "haruki"){
    echo "私は".$name."です";
}
else{
    echo "あなたの名前ではありません";
}
*/

/*
$total = 0;
for($i = 1; $i <=10000;$i++){
    $total += $i;
}
echo $total;
*/

/*
$fruits = array("apple","pair","grape","peach","orange");

foreach($fruits as $fruit){
    echo "要素は". $fruit;
    echo "\n";
}
*/

/* for文の始めの値を定義する /
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}