<?php
// 入力を取得
$a = str_split(trim(fgets(STDIN)));

// フラグの初期化
$same = true;
$step = true;

// 各条件をチェック
for ($i = 0; $i < 3; $i++) {
    if ($a[$i] != $a[$i + 1]) {
        $same = false;
    }
    if ((($a[$i] + 1) % 10) != ($a[$i + 1] % 10)) {
        $step = false;
    }
}

// 出力
if ($same || $step) {
    echo "Weak\n";
} else {
    echo "Strong\n";
}
