<?php
    fscanf(STDIN, "%d%d", $A, $B);
    $result = $A - ($B + $B);
    if($result < 0) echo 0;
    else echo $result;
