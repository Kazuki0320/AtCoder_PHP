<?php
list($A, $B, $K) = explode(" ", trim(fgets(STDIN)));
$count = 0;

while ($A < $B) {
    $A *= $K;
    $count++;
}

echo $count;
?>

