<?php
/*
[考え方]
・入力値を受け取る
・配列として受け取りたい
・a,i,u,e,oの母音を配列として変数で宣言
・str_replaceで、上記文字を空白に置換
*/
$W = str_split(trim(fgets(STDIN)));
$array = ["a", "i", "u", "e", "o"];

foreach($W as $value) {
	$result[] = str_replace($array, "", $value);
}
echo "\n";