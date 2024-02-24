<?php
fscanf(STDIN, "%d %d %d %d %d %d %d", $a, $b, $c, $d, $e, $f, $x);
$takahashi = 0;
$aoki = 0;

$cycleTakahashi = $a + $c;
$cycleAoki = $d + $f;

for ($k = 0; $k < $x; ++$k) {
    if ($k % $cycleTakahashi < $a) {
        $takahashi += $b;
    }
    if ($k % $cycleAoki < $d) {
        $aoki += $e;
    }
}

if ($takahashi > $aoki) {
    echo "Takahashi\n";
} else if ($takahashi < $aoki) {
    echo "Aoki\n";
} else {
    echo "Draw\n";
}
?>

