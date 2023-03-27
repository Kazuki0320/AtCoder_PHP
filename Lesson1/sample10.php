<?php
date_default_timezone_set('Asia/Tokyo');

for($i = 0; $i <= 365;  $i++):
	//文字列連結を使ったパターン1
	// $time = strtotime('+'. $i. 'day');
	//ダブルコーテーションを使ったパターン2
	$time = strtotime("+$i day");
	$day = date('n/j(D)', $time);
	echo $day. '<br>';
endfor;
?>