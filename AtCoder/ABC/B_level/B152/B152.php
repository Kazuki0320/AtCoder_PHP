<?php
    fscanf(STDIN, "%d%d", $A, $B);

    $a = "";
    $b = "";

    $a = str_repeat($A, $B);
    $b = str_repeat($B, $A);

    if($a > $b) echo $a . PHP_EOL;
    else echo $b . PHP_EOL;
