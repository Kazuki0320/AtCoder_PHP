<?php

$N = intval(trim(fgets(STDIN)));
$S = [];
$maxLength = 0;

for ($i = 0; $i < $N; $i++) {
    $S[$i] = trim(fgets(STDIN));
    $maxLength = max($maxLength, strlen($S[$i]));
}

$result = array_fill(0, $maxLength, array_fill(0, $N, '*'));


for ($i = 0; $i < $N; $i++) {
    for ($j = 0; $j < strlen($S[$i]); $j++) {
        $result[$j][$N - $i - 1] = $S[$i][$j];
        var_dump($result);
    }
}

for ($i = 0; $i < $maxLength; $i++) {
    $line = rtrim(implode($result[$i]), '*');
    echo $line . PHP_EOL;
}
