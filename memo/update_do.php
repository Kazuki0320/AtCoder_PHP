<?php
require('dbconnect.php');

$stmt = $db->prepare('update memo set memo=? where id=?');
if(!$stmt) {
	die($db->error);
}
$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$memo = filter_input(INPUT_POST, 'memo', FILTER_UNSAFE_RAW);
$stmt->bind_param('si', $memo, $id);
$success = $stmt->execute();
if(!$success) {
	die($db->error);
}

header('Location: memo.php?id=' . $id);
?>
