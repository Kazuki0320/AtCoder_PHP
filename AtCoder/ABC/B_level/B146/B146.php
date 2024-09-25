<?php
    fscanf(STDIN, "%d", $N);
    $S = str_split(trim(fgets(STDIN)));

    $result = [];
    for($i = 0; $i < count($S); $i++) {
        $ascii = ord($S[$i]);
        $result_ascii []= $ascii + $N;
        if(90 < $result_ascii[$i]) {
            $result []= $result_ascii[$i] - 26;
        } else {
            $result [] = $result_ascii[$i];
        }
    }

    
    foreach ($result as $value) {
        echo chr($value);
    }
