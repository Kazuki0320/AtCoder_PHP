<?php
    fscanf(STDIN, "%d%d%d", $A, $B, $C);
    $result = $C - ($A - $B);
    echo max(0, $result);

