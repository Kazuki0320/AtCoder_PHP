<?php

$ary = explode(' ', readline());
$n = (int)$ary[0];
$m = (int)$ary[1];

$s = $r = [];

for ($i = 0; $i < $n; ++$i) {
    $s[] = readline();
}

$nn = $n - 8;
$mm = $m - 8;

for ($x = 0; $x < $nn; ++$x) {
    for ($y = 0; $y < $mm; ++$y) {
        for ($i = 0; $i < 4; ++$i) {
            for ($j = 0; $j < 4; ++$j) {
                if ($i < 3 && $j < 3) {
                    if ($s[$x + $i][$y + $j] !== '#') {
                        // gp next
                        continue 3;
                    }
                } else {
                    if ($s[$x + $i][$y + $j] !== '.') {
                        // gp next
                        continue 3;
                    }
                }
            }
        }
        for ($i = 8; $i > 4; --$i) {
            for ($j = 8; $j > 4; --$j) {
                if ($i > 5 && $j > 5) {
                    if ($s[$x + $i][$y + $j] !== '#') {
                        // gp next
                        continue 3;
                    }
                } else {
                    if ($s[$x + $i][$y + $j] !== '.') {
                        // gp next
                        continue 3;
                    }
                }
            }
        }
        $r[] = ($x + 1) . ' ' . ($y + 1);
    }
}

foreach ($r as $v) {
    echo $v, PHP_EOL;
}

