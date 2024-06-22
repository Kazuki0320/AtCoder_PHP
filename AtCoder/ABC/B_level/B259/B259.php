<?php
$input = trim(fgets(STDIN));
[$x1, $y1, $deg] = explode(' ', $input);
$rad = deg2rad($deg);

$x2 = $x1 * cos($rad) - $y1 * sin($rad);
$y2 = $x1 * sin($rad) + $y1 * cos($rad);

echo $x2 . " " . $y2 . "\n";
