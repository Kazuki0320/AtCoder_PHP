<?php
	//array_mapん関数の使い方
	//第一引数にコールバック関数を呼び出し、第二引数に処理をしたい変数を呼び出す
	//コールバック関数
	function valueCalc($n) {
		return ($n + $n);
	}

	$value_array = [100, 200, 400, 500];

	//array_mapを使用して配列全ての要素を返す
	$value_array1 = array_map('valueCalc', $value_array);
	print_r($value_array1);

	echo '<br>';
	//複数の配列に特定の関数を渡す
	function valueCalc1($a, $b, $c) {
		return $a + $b - $c;
	}

	$value_array1 = [100, 200, 300, 400, 500];
	$value_array2 = [500, 400, 300, 200, 100];
	$value_array3 = [10, 20, 30, 40, 50];

	$value_array4 = array_map('valueCalc1', $value_array1, $value_array2, $value_array3);
	print_r($value_array4);

	echo '<br>';
	//array_map関数で配列を結合する
	//第一引数にnullを入れることで、配列を結合することができる
	$fruits_key = ['apple', 'orange', 'melon'];
	$fruits_value = ["100円", " 250円", "300円"];

	$fruits = array_map(null, $fruits_key, $fruits_value);
	print_r($fruits);

	echo '<br>';
	//文字列を分割して値を特定の関数で処理する
	function fruits_trim($n) {
		echo 'How much is this '. $n .'?';
		echo '<br>';
	}

	$fruits_str = 'apple,orange,banana,pineapple,mango';
	//explodeで文字列をカンマ区切りで分ける
	array_map('fruits_trim', explode(',', $fruits_str));
?>