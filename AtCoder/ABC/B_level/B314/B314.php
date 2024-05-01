<?php

$n = (int)trim(fgets(STDIN));

$c = [];
//各々の入力値を受け取る
for($i =1; $i <= $n; $i++){
  $c[$i] = (int)trim(fgets(STDIN));
  $a[$i] = explode(" ", trim(fgets(STDIN)));
}

$x = (int)trim(fgets(STDIN));

$answer = [];
$count = 0;

//$xが含まれる配列の検索をして、要素の最小値を探す
for($i =1; $i <= $n; $i++){
  if(in_array($x, $a[$i])){

    if(count($a[$i]) < $count || $count === 0){
      $count = count($a[$i]);
      $answer = [];
      $answer[] = $i;
    } elseif (count($a[$i]) === $count){
      $answer[] = $i;
    }
  }
}

echo count($answer) . PHP_EOL;
echo implode(" ", $answer) .PHP_EOL;
