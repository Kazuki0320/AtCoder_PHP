<?php

$N = (int) trim(fgets(STDIN));
$p = array_map('intval',explode(" ", trim(fgets(STDIN))));
$cnt = 0;
for ($i = 0; $i < $N-2; $i++) {
    $min = min($p[$i],$p[$i+2]);
    $max = max($p[$i],$p[$i+2]);
    if ($min < $p[$i+1] && $p[$i+1] < $max) {
        $cnt++;
    }
}
echo $cnt . PHP_EOL;

