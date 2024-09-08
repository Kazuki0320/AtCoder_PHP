<?php
    fscanf(STDIN, "%d", $N);

    $A = array_map("intval", explode(" ", trim(fgets(STDIN))));

    $result = 1;
    foreach ($A as $key => $value) {
        if ($value == 0) {
            echo 0;
            exit;
        }      
        $result *= $value;   
    }

    if(pow(10, 18) < $result) {
        echo "-1" . PHP_EOL; 
    } else {
        echo $result . PHP_EOL;
    }
