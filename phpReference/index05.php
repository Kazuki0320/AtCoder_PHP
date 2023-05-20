<?php
	//連想配列を使った応用
	//検索したい値を見つける構文
	$score = array("鈴木"=>"98点", "山田"=>"82点", "佐藤"=>"92点", "池田"=>"100点");
	if(in_array("82点", $score, true)){
		print "見つかりました\n";
		echo "<br>";
	}

	//array_key_existsで、keyの有無を調べることもできる
	$score1 = array("鈴木"=>"98点", "山田"=>"82点", "佐藤"=>"92点", "池田"=>"100点");
	if(array_key_exists("佐藤", $score1)) {
		print "見つかりました\n";
	}

	//array_keys関数によるkeyの一覧取得
	$score2 = array("鈴木"=>"98点", "山田"=>"82点", "佐藤"=>"92点", "池田"=>"100点");	
	$keys = array_keys($score);
	echo "<br>";
	print_r($keys);
?>