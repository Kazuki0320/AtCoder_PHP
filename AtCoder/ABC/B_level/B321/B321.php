<?php
fscanf(STDIN, "%d %d", $N, $R);
$number1 = explode(" ", trim(fgets(STDIN)));
$number_s = sort($number);
$number2 = preg_replace(max($number_s), "", $number_s);
$number3 = preg_replace(min($number_s), "", $number_s);
?>
