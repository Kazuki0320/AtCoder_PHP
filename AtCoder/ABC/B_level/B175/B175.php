<?php
fscanf(STDIN, "%d", $N);
$vec = array_map('intval', explode(' ', trim(fgets(STDIN))));

sort($vec);

$ans = 0;

for ($i = 0; $i < $N; $i++) {
    for ($j = 0; $j < $i; $j++) {
        for ($k = 0; $k < $j; $k++) {
            if ($vec[$k] != $vec[$j] && $vec[$i] != $vec[$j] && $vec[$k] + $vec[$j] > $vec[$i]) {
                $ans++;
            }
        }
    }
}

echo $ans . PHP_EOL;
