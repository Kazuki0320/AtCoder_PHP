<?php
//連想配列
$array = ["apple" => "りんご", "lemon" => "レモン", "peach" => "もも"];
print_r($array);
echo	'<br>';
//配列のkeyであるlemonを指定して、レモンを出力
echo $array["lemon"];

//[array_keys関数使い方]
//連想配列の「key」だけを取得する関数
//第1引数に連想配列を渡し、第2引数に連想配列の中のvalueから検索したい値を渡すことで、
//検索するvalueとセットになっているkeyを抽出し配列にして返却。

echo '<br>';
$array1 = ["apple" => "りんご", "lemon" => "レモン", "peach" => "もも"];
//連想配列のkeyを取得し、配列に返却
$keys = array_keys($array1);
print_r($keys);
echo '<br>';

//array_keysを使用して、検索するvalueとセットになっているkeyを抽出する方法
$array2 = ["apple" => "りんご", "lemon" => "レモン", "peach" => "もも"];
$keys1 = array_keys($array2, "レモン");
print_r($keys1);
echo '<br>';

//foreachを使ったvalueの抽出方法
$array3 = ["apple" => "りんご", "lemon" => "レモン", "peach" => "もも"];
foreach($array3 as $value) {
	echo $value. "\n";
	echo "<br>";
}

//foreachを使って、keyとvalueを出力
$array4 = ["apple" => "りんご", "lemon" => "レモン", "peach" => "もも"]; 
foreach($array4 as $key => $value) {
	echo $key . " : " . $value. "\n";
}

?>