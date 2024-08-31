<?php
    fscanf(STDIN, "%d%d%d%d", $A, $B, $C, $D);

    echo max($A * $C, $A * $D, $B * $C, $B * $D) . PHP_EOL;
?>
