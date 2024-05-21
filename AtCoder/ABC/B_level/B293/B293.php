<?php
// 標準入力から読み取る
$num = trim(fgets(STDIN));
$str = explode(" ", trim(fgets(STDIN)));

// 呼ばれたかどうかを追跡する配列
$called = array_fill(0, $num, false);

// 各人が呼ぶ番号を記録
for ($i = 0; $i < $num; $i++) {
    $call = (int)$str[$i] - 1;
    if ($called[$i] === false) {
        $called[$call] = true;
    }
}

// 一度も呼ばれていない人の番号を集める
$unmentioned = [];
for ($i = 0; $i < $num; $i++) {
    if ($called[$i] === false) {
        $unmentioned[] = $i + 1;
    }
}

// 昇順にソートして出力
sort($unmentioned);

// 一度も呼ばれていない人数を出力
echo count($unmentioned) . PHP_EOL;

foreach ($unmentioned as $person) {
    echo $person . " ";
}

