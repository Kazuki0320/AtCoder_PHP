<?php
// 入力を受け取る
$S = trim(fgets(STDIN));

// Tを作成する
$pattern = 'oxx';
$repeatedPattern = str_repeat($pattern, 105);

// SがTの部分文字列かどうかをチェックする
if (strpos($repeatedPattern, $S) !== false) {
    echo "Yes\n";
} else {
    echo "No\n";
}
