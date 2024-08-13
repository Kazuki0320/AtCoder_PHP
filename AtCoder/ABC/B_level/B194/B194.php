<?php
fscanf(STDIN, "%d", $n);

$a = array_fill(0, $n, 0);
$b = array_fill(0, $n, 0);

for ($i = 0; $i < $n; $i++) {
    fscanf(STDIN, "%d %d", $a[$i], $b[$i]);
}

$res = 1000000000;

for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        if ($i == $j) {
            $res = min($res, $a[$i] + $b[$j]);
        } else {
            $res = min($res, max($a[$i], $b[$j]));
        }
    }
}

echo $res . PHP_EOL;

