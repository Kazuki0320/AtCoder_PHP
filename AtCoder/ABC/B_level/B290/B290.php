<?php
    fscanf(STDIN, "%d%d", $N, $K);
    $S = str_split(trim(fgets(STDIN)));
    
    $newStr = [];
    $count = 0;
    
    for($i = 0; $i < $N; $i++) {
        if($K <= $count) {
            $newStr []= "x";
            continue;
        }
        
        if($S[$i] == 'o') {
            $newStr []= $S[$i];
            $count++;
        } else {
            $newStr []= $S[$i];
        }
    }

    for($i = 0; $i < $N; $i++) {
	    echo $newStr[$i];
    }
