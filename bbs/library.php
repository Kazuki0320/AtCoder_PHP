<?php
//・htmlspecialcharsを短くする処理
function hsc($value) {
    return htmlspecialchars($value, ENT_QUOTES);
}

//DB接続のための処理
function dbConnect() {
	$db = new mysqli('localhost:8889', 'root', 'root', 'mini_bbs');
	if(!$db) {
		die($db->error);
	}

	return $db;
}
?>