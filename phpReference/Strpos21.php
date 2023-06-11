<?php
//strpos関数
//特定の文字列を含んでいるか確認する関数

$str = "abcd";
$check = "abc";

// if (strpos($str, $check)) {
// 	echo "検索文字列あり";
// } else {
// 	echo "検索文字列なし";
// }
//上記書き方はNG。下記が正解
$str = "abcd";
$check = "abc";

if (strpos($str, $check) === false) {
	echo "検索文字列なし";
} else {
	echo "検索文字列あり";
}