<?php
$inp = explode(" ", trim(fgets(STDIN)));
$str = "atcoder";

$ans = array_slice(str_split($str), $inp[0] - 1, $inp[1] - $inp[0] + 1);
echo implode('', $ans);
?>

