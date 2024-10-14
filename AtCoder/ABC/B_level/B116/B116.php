<?php
// 入力値を取得
fscanf(STDIN, "%d", $s);

// 数列を保存する配列
$sequence[] = $s;

// 関数 f(n) を定義
function f($n) {
    if ($n % 2 == 0) {
        return $n / 2;
    } else {
        return 3 * $n + 1;
    }
}

// 数列を生成し、最小の重複位置 m を探す
$m = 1;  // 初項 s は a1 に対応
while (true) {
    // 次の項を生成
    $next = f($sequence[$m - 1]);

    // 次の項が既に出現していれば、その時点で終了
    if (in_array($next, $sequence)) {
        echo $m + 1 . PHP_EOL;  // 1-based index で返す
        break;
    }

    // 数列に追加
    $sequence[] = $next;
    $m++;
}

