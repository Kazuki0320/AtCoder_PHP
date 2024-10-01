<?php
    list($k, $x) = explode(" ", trim(fgets(STDIN)));

    $list = [];

    for($i = 0; $i < $k; $i++) {
        $list [] = $x - $i;
        $list [] = $x + $i;

        sort($list);
    } 

    $lu = array_unique($list);
    echo implode(" ", $lu);
