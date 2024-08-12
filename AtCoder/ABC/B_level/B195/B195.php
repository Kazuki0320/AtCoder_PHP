<?php
fscanf(STDIN, "%d %d %d", $a, $b, $w);
$w *= 1000; // キログラムをグラムに変換

$upper = (int) floor($w / $a); // 上限: みかんの最小の重さ a で割った値の切り捨て
$lower = (int) ceil($w / $b);  // 下限: みかんの最大の重さ b で割った値の切り上げ

if ($lower > $upper) {
    echo "UNSATISFIABLE" . PHP_EOL;
} else {
    echo $lower . " " . $upper . PHP_EOL;
}

