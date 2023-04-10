<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>メモ詳細</title>
</head>
<body>
<?php
	require('dbconnect.php');
	// $db = new mysqli('localhost:8889', 'root', 'root', 'mydb');
	$stmt = $db->prepare('select * from memo where id=?');
	if (!$stmt) {
		die($db->error);
	}
	//IDをURLパラメーターで受け取る
	$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
	/*
	URLパラメーターで制御できるようにすると、正しくパラメーターを渡さなかった場合やいたずらで、
	存在しないIDを渡されたりする可能性があります。
	そこで、次のようなif構文を使ってこれを防ぐようにしましょう。
	*/
	if (!$id) { // ここから追加
		echo '表示するメモを指定してください';
		exit();
	} // ここまで
	$stmt->bind_param('i', $id);
	$stmt->execute();

	$stmt->bind_result($id, $memo, $created);
	$result = $stmt->fetch();
	//正しく指定はされたもののメモが見つからなかったときのためのエラー処理も一番下に追加します。
	if (!$result) { // ここから追加
		echo '指定されたメモは見つかりませんでした';
		exit();
	}
	?>

	<div><?php echo htmlspecialchars($memo); ?></div>
</body>
</html>