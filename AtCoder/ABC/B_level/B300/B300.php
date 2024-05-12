<?php
// 入力を受け取る
[$h, $w] = explode(" ", trim(fgets(STDIN)));
$a = array();
$b = array();
for ($i = 0; $i < $h; $i++) {
    $a[] = str_split(trim(fgets(STDIN)));
}
for ($i = 0; $i < $h; $i++) {
    $b[] = str_split(trim(fgets(STDIN)));
}

// 縦方向のシフトを行う関数
function shiftRow($a, $s) {
    $h = count($a);
    $w = count($a[0]);
    $b = array();
    for ($i = 0; $i < $h; $i++) {
        $b[] = array_slice($a[($i + $s) % $h], 0, $w);
    }
    return $b;
}

// 横方向のシフトを行う関数
function shiftColumn($a, $t) {
    $h = count($a);
    $w = count($a[0]);
    $b = array();
    for ($i = 0; $i < $h; $i++) {
        $b[$i] = array();
        for ($j = 0; $j < $w; $j++) {
            $b[$i][] = $a[$i][($j + $t) % $w];
        }
    }
    return $b;
}

// 縦方向のシフトと横方向のシフトの組み合わせを調べる
for ($s = 0; $s < $h; $s++) {
    for ($t = 0; $t < $w; $t++) {
        $c = shiftColumn(shiftRow($a, $s), $t);
        var_dump("c:", $c);
        if ($c === $b) {
            echo "Yes\n";
            exit;
        }
    }
}

echo "No\n";

