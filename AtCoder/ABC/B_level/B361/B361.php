<?php
fscanf(STDIN, '%d %d %d %d %d %d', $a, $b, $c, $d, $e, $f);
fscanf(STDIN, '%d %d %d %d %d %d', $g, $h, $i, $j, $k, $l);

if ($d <= $g || $j<=$a) exit('No');
if ($e <= $h || $k<=$b) exit('No');
if ($f <= $i || $l<=$c) exit('No');
echo 'Yes';
