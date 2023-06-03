<?php
//配列の要素を昇順にソードするsort()
$array = array('red', 'blue', 'green', 'yellow');
$sort = sort($array);
print_r($sort);
echo "<br>";
print_r($array);
echo "<br>";
$sort1 = rsort($array);
print_r($sort1);
echo "<br>";
print_r($array);
echo "<br>";

$array1 = array('赤' => 'red', '青' => 'blue', '黄' => 'yellow', '緑' => 'green', '紫' => 'purple');
$sort = sort($array1);
print_r($sort);
echo "<br>";
print_r($array1);
echo "<br>";

//キーと値のペアを維持しつつ配列の要素を昇順に並べ替えるasort関数
$array2 = array('赤' => 'red', '青' => 'blue', '黄' => 'yellow', '緑' => 'green', '紫' => 'purple');
$sort = asort($array2);

print_r($sort);
echo "<br>";
print_r($array2);
echo "<br>";

$array3 = array('赤' => 'red', '青' => 'blue', '黄' => 'yellow', '緑' => 'green', '紫' => 'purple');
$sort = arsort($array3);

print_r($sort);
echo "<br>";
print_r($array3);