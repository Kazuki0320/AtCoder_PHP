<?php
	//count関数
	//配列の要素数をカウント
	$fruits = ['apple', 'banana', 'lemon'];

	//配列の長さを調べる
	$array_count = count($fruits);
	echo 'count:' .$array_count;
	echo '<br>';

	//配列をループさせて、要素を取得していく
	$fruits1 = ['apple', 'banana', 'lemon', 'melon', 'pineapple'];

	for($i = 0; $i < count($fruits1); $i++) {
		echo $fruits1[$i];
		echo '<br>';
	}
?>