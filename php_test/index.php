<?php
	//配列
	$array = [1, 2, 3];

	echo '<pre>';
	var_dump($array);
	echo '</pre>';

	//連想配列
	$array1 = [
		'name' => 'マイケル',
		'height' => 190,
		'hobby' => 'サッカー',
	];

	echo $array1['hobby'];

	//foreach
	$members = [
		'name' => '長友',
		'height' => 170,
		'hobby' => 'サッカー',
	];

	//バリューのみ表示
	foreach($members as $member) {
		echo $member;
	}

	echo '<br>';

	//キーとバリューを表示
	foreach($members as $key => $value) {
		echo $key . 'は' . $value . 'です';
	}

?>