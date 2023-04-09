<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>sample05</title>
</head>
<body>
<?php
	$db = new mysqli('localhost:8889', 'root', 'root', 'mydb');
	$message = "フォームからのメモです";//挿入するメッセージ
	$stmt = $db->prepare('insert into memo(memo) values(?)');
	if(!$stmt):
		die($db->error);
	endif;
	$stmt->bind_param('s', $message);
	/*
	・SQLの中に?がある時に使えるのが、bind_param
	・?に何を入れるかを第二引数のパラメーターで指定している
	*/
	$ret = $stmt->execute();
	/*
	・executeは実行するという意味
	・prepareで準備されたbind_paramされたSQLを実行するという意味になる。
	*/
	if($ret):
		echo 'データを挿入しました';
	else:
		echo $db->error;
	endif;
?>
</body>
</html>