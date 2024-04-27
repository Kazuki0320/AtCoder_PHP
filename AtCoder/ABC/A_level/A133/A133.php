<?php
    fscanf(STDIN, "%d%d%d", $A, $B, $C);
    $bus = $A * $B;
    $result = [$bus, $C];
    echo min($result);
