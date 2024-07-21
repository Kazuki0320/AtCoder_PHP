<?php
list($n, $x) = explode(" ", trim(fgets(STDIN)));
$a = explode(" ", trim(fgets(STDIN)));
$b = [];
for ($i = 0; $i < $n; $i++) {
    $b[] = $x;
    $x = $a[$x - 1];
}

echo count(array_unique($b));
