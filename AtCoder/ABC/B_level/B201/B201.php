<?php
    fscanf(STDIN, "%d", $N);

    $mountain = [];
    $high = [];
    for($i = 0; $i < $N; $i++) {
        $mountain [] = explode(" ", trim(fgets(STDIN)));;
        $high []= $mountain[$i][1];
    }

    rsort($high);
    
    for($i = 0; $i < $N; $i++) {
        if($mountain[$i][1] == $high[1]) {
            echo $mountain[$i][0] . PHP_EOL;
        }
    }
