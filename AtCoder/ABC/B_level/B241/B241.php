<?php

[$n,$m] = array_map('intval', explode(" ", trim(fgets(STDIN))));
$a = array_map('intval', explode(" ", trim(fgets(STDIN))));
$b = array_map('intval', explode(" ", trim(fgets(STDIN))));

for ($i = 0; $i < $m; $i++) {
    $idx = array_search($b[$i], $a);
    if (($idx) === false) {
        echo 'No' . PHP_EOL;exit;
    } else {
        unset($a[$idx]);
    }
}
echo 'Yes'. PHP_EOL;
