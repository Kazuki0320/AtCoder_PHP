<?php
    $S = str_split(trim(fgets(STDIN)));
    
    $count_str = array_count_values(array_count_values($S));
    
    foreach ($count_str as $key => $value) {
        if($value != 0 && $value != 2) {
            echo "No" . PHP_EOL;
            exit;
        }
    }
    echo "Yes" . PHP_EOL;
