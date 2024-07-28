<?php
    $str_array = [];
    for($i = 0; $i < 3; $i++) {
        $S = trim(fgets(STDIN));

        $str_array []= $S;
    }

    fscanf(STDIN, "%d", $N);
    $num = array_map(function($digit) {
        return intval($digit)-1;   
    }, str_split($N));

    for($j = 0; $j < count($num); $j++) {
        echo $str_array[$num[$j]];
    }
