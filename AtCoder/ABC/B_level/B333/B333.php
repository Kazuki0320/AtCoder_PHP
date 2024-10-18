<?php

$s1 = fgets(STDIN);
$s2 = fgets(STDIN);

$type1 = 2;
$diff1 = abs(ord($s1[0]) - ord($s1[1]));
if ($diff1 === 1 || $diff1 === 4) {
    $type1 = 1;
}

$type2 = 2;
$diff2 = abs(ord($s2[0]) - ord($s2[1]));
if ($diff2 === 1 || $diff2 === 4) {
    $type2 = 1;
}

echo ($type1 === $type2) ? "Yes" : "No";

?>
