<?php

[$a,$b,$c,$k] = array_map('intval',explode(" ", trim(fgets(STDIN))));
if ($a >= $k) {
    echo $k . PHP_EOL;
} elseif ($a+$b >= $k) {
    echo $a . PHP_EOL;
} else {
    $remain = $k - $a - $b;
    echo ($a - $remain) . PHP_EOL;
}
