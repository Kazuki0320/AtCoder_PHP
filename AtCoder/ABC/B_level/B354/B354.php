<?php
    fscanf(STDIN, "%d", $N);
    
    $names = [];
    $rates = [];
    for($i = 0; $i < $N; $i++) {
        fscanf(STDIN, "%s %d", $name, $rate); 
        
        $names [] = $name;
        $rates [] = $rate;
    }
    
    asort($names);
    $sum = array_sum($rates);

    $number = $sum % $N;
    echo $names[$number] . PHP_EOL
