<?php
	//文字列の長さ
	$test = 'ABC';

	echo strlen($test);

	echo '<br>';

	//例として,日本語で'あいうえお'と入力するとどうなるか
	$test = 'あいうえお';

	// echo strlen($test);

	//マルチバイトのstrlenがあるので、それを使う
	echo mb_strlen($test);

	echo '<br>';
	/*
	上記をechoで表示すると、15となる。 
	→マルチバイトと呼ばれて、UTF-8だと3~6バイトと決まっているため、3*5=15となる。
	マルチバイト文字とは、8ビットで定義できる文字がシングルバイト文字と言われるのに対して、16ビット以上を必要とする文字である。
	*/

	//文字列の置換
	$str = '文字列の置換';

	echo str_replace('置換', 'ちかん', $str);

	//指定文字列で分割
	//アウトプットで、配列で返ってくる
	$str_2 = '指定文字列で、分割します';

	echo '<pre>';
		var_dump(explode('、', $str_2));
	echo '</pre>';

	//正規表現
	//→指定したものがあるかどうかをチェックする
	//文字かどうか
	//数字かどうか
	//郵便番号
	//メールアドレスか test@gmail.com

	$str_3 = '特定の文字列が含まれているか確認する';

	echo preg_match('/文字列/', $str_3);

	//指定文字列から文字列を取得する
	//この場合は、aを切った'bcde'が表示される
	echo substr('abcde', 1);

	echo '<br>';
	//マルチバイトを考慮した関数は以下
	echo mb_substr('あいうえお', 1);

	echo '<pre>';
	//配列に配列を追加する
	$array = ['りんご', 'みかん'];

	array_push($array, 'ぶどう');
	var_dump($array);
	echo '</pre>';
?>