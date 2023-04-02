<?php
$success = file_put_contents('news.txt',
	'ホームページをリニューアルしました');

//file_put_contentsの返り値は、エラーであればfalseを返す。
//そうでなければ、バイト数を返す。
if($success !== false) {
	echo 'ファイルの書き込みが完了しました';
} else {
	echo 'ファイルの書き込みに失敗しました';
}