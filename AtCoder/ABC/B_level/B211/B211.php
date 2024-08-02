<?php
    $pen_values = [
        "H",
        "2B",
        "3B",
        "HR"
    ];

    for($i = 0; $i < 4; $i++) {
        $pen_value = trim(fgets(STDIN));
        
        $key = array_search($pen_value, $pen_values);
        
        if($key !== false) {
            unset($pen_values[$key]);
        }
    }
    
    if(count($pen_values)) {
        echo "No" . PHP_EOL;
    } else {
        echo "Yes" . PHP_EOL;
    }
