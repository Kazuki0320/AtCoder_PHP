<?php
    fscanf(STDIN, "%d%d%d", $A, $B ,$C);
    $Q = ceil($A / $B);
    echo ($C * $Q);
