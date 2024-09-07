<?php
fscanf(STDIN, '%d %d', $x, $y);

$max = $x * 4;
$min = $x * 2;

if( $y % 2 == 0 && $y <= $max && $y >= $min) {
    echo 'Yes';
} else {
    echo 'No';
}
