<?php

[$n,$s,$d] = array_map('intval', explode(" ", trim(fgets(STDIN))));

for ($i = 0; $i < $n; $i++) {
    [$x,$y] = array_map('intval', explode(" ", trim(fgets(STDIN))));
    if ($x < $s && $y > $d) {
        echo 'Yes' . PHP_EOL;exit;
    }
}
echo 'No' . PHP_EOL;
