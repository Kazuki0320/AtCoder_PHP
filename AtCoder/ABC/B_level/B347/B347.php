<?php
function countUniqueSubstrings($S) {
    $uniqueSubstrings = [];

    $length = strlen($S);
    // 全ての部分文字列を列挙
    for ($i = 0; $i < $length; $i++) {
        for ($j = 1; $j <= $length - $i; $j++) {
            // 部分文字列を取り出して配列に格納
            $substring = substr($S, $i, $j);
            $uniqueSubstrings[$substring] = true;  // 配列のキーに部分文字列を追加
        }
    }

    // ユニークな部分文字列の数をカウント
    return count($uniqueSubstrings);
}

// 入力を受け取る
fscanf(STDIN, "%s", $S);

// 結果を出力
echo countUniqueSubstrings($S) . PHP_EOL;
