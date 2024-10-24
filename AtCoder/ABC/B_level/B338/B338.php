<?php
    $S = str_split(trim(fgets(STDIN)));

    $value1 = [];
    $max_value = 0;

    $count_values = array_count_values($S);
    foreach ($count_values as $key => $value) {
        
        if($value > $max_value) {
            $max_value = $value;
            $value1 = [[$key, $value]];
        } else if($value == $max_value && strcmp($key, $value1[0][0]) < 0) {
            $value1 = [[$key, $value]];
        }
    }
    
    echo $value1[0][0] . PHP_EOL;
