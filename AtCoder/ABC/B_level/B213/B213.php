<?php
    fscanf(STDIN, "%d", $N);
    $S = explode(" ", trim(fgets(STDIN)));
    $array = array_fill(1, $N, 0);
    
    for($i = 0; $i < $N; $i++) {
        $array[$i + 1] = intval($S[$i]);
    }

    arsort($array);
    $values = array_values($array);
    $second_largest = $values[1];
    
    foreach ($array as $key => $value) {
        if($second_largest === $value) {
            echo $key . PHP_EOL;
        }
    }
