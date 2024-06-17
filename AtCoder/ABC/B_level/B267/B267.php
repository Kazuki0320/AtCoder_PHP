<?php
$pin = str_split(trim(fgets(STDIN)));

if ($pin[0] === '1') {
    echo 'No' . PHP_EOL;
    return;
}

// ピンの配置を定義
$pinFlag = [
    7 => false,
    4 => false,
    2 => false,
    8 => false,
    1 => false,
    5 => false,
    3 => false,
    9 => false,
    6 => false,
    10 => false
];

// 入力に基づいてピンの状態を更新
for ($i = 0; $i < count($pin); $i++) {
    if ($pin[$i] === '1') {
        $pinFlag[$i + 1] = true;
    }
}

// 列の状態を定義
$column = [
    $pinFlag[7],
    $pinFlag[4],
    $pinFlag[2] || $pinFlag[8],
    $pinFlag[1] || $pinFlag[5],
    $pinFlag[3] || $pinFlag[9],
    $pinFlag[6],
    $pinFlag[10]
];

// スプリット状態をチェック
for ($i = 2; $i < count($column); $i++) {
    for ($j = 0; $j < $i; $j++) {
        if ($column[$i] && $column[$j]) {
            for ($k = $j + 1; $k < $i; $k++) {
                if (!$column[$k]) {
                    echo 'Yes' . PHP_EOL;
                    return;
                }
            }
        }
    }
}
echo 'No' . PHP_EOL;
?>
