<?php
fscanf(STDIN, "%d %d", $L, $R);
$s = str_split(trim(fgets(STDIN)));

$L -= 1;
$R -= 1;

// 指定された範囲の部分を切り取って逆順にする
$middle = array_slice($s, $L, $R - $L + 1);
$middle = array_reverse($middle);

for ($i = $L, $j = 0; $i <= $R; $i++, $j++) {
    $s[$i] = $middle[$j];
}

echo implode('', $s) . "\n";
?>
