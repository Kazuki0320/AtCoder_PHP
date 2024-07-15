<?php
    fscanf(STDIN, "%d", $S);

    $name = [];
    for($i = 0; $i < $S; $i++) {
        $name []= trim(fgets(STDIN));
    }

    $result = array_count_values($name);
    
    $max_count = max($result);

    foreach($result as $key => $value) {
        if($value === $max_count) {
            echo $key . "\n";
            break;
        }    
    } 
