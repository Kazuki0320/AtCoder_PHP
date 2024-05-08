<?php
$n = trim(fgets(STDIN));

if ($n < 1000) {
    $ans = $n;
} elseif ($n < 10000) {
    $ans = floor($n / 10) * 10;
} elseif ($n < 100000) {
    $ans = floor($n / 100) * 100;
} elseif ($n < 1000000) {
    $ans = floor($n / 1000) * 1000;
} elseif ($n < 10000000) {
    $ans = floor($n / 10000) * 10000;
} elseif ($n < 100000000) {
    $ans = floor($n / 100000) * 100000;
} elseif ($n < 1000000000) {
    $ans = floor($n / 1000000) * 1000000;
}

echo $ans . PHP_EOL;
