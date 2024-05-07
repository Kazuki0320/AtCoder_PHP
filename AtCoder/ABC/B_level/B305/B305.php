<?php
fscanf(STDIN, "%s %s",$p, $q);

$dist = [
    'A' => 0,
    'B' => 3, 
    'C' => 4,
    'D' => 8,
    'E' => 9,
    'F' => 14,
    'G' => 23,
];

echo abs($dist[$q] - $dist[$p]);
