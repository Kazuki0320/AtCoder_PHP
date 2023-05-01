<?php

const DB_HOST = 'mysql:dbname=udemy_php;host=localhost;charset=utf8';
//下記、userとpasswordは接続成功する
// const DB_USER = 'root';
// const DB_PASSWORD = 'root';
//下記、userとpasswordは？
const DB_USER = 'php_user';
const DB_PASSWORD = 'password123';


//例外処理→Exception
try{
	$pdo = new PDO(DB_HOST, DB_USER, DB_PASSWORD);
	// $pdo = new PDO(DB_HOST, DB_USER, DB_PASSWORD, [
	// 	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,//返ってくる値を連想配列として取得
	// 	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,//例外
	// 	PDO::ATTR_EMULATE_PREPARES => false,//SQLインジェクション対策
	// ]);
	echo '接続成功';
}catch(PDOException $e) {
	echo '接続失敗' . $e->getMessage() . "\n";
	exit();
}

?>