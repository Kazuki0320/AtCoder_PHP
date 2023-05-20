<?php
	//isset関数
	//isset関数の引数に変数を設定することができ、値が設定されているか確認ができる
	$var = "sample";
	$var1 = "sample1";

	var_dump(isset($var));
	//二つの変数に値が設定されていれば、true
	var_dump(isset($var, $var1));

	unset($var);
	//unsetで、varの値を削除しているので、下記二つともfalseが返ってくる	
	var_dump(isset($var));
	var_dump(isset($var, $var1));
?>