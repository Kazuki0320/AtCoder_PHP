<?php
$s = trim(fgets(STDIN));
$t = trim(fgets(STDIN));

$n = strlen($s);
$m = strlen($t);

$a = array_fill(0,$n,0);

$j = 0;
for($i=0; $i<$m; $i++) {
    if($s[$j] == $t[$i]) {
        $a[$j] = $i+1;
        $j++;
    }
}

echo implode(" ",$a) . PHP_EOL;
