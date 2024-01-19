<?php

[$N,$K] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$A = array_map('intval',explode(" ", trim(fgets(STDIN))));
for ($i = 0; $i < $K; $i++) {
    array_shift($A);
    $A[] = 0;
}
echo implode(" ", $A) . PHP_EOL;

