<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>sample04</title>
</head>
<body>
<?php
	$db = new mysqli('localhost:8889', 'root', 'root', 'mydb');
	$db->query('insert into memo(memo) values("PHPからのメモです")');
	echo 'データを挿入しました';
?>
</body>
</html>