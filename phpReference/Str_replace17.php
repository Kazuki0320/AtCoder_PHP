<?php
//検索した文字列に一致した全ての文字列を置換するにはstr_replace関数を使用する。
$text = "apple, orange, apple, banana";
$replace = str_replace("apple", "melon", $text);
echo $replace;
echo "<br>";

//配列の置換も可能
$text1 = ["apple, orange, apple, banana"];
$replace_array = str_replace("apple", "melon", $text1);
print_r($replace_array);