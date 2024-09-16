<?php
    $S = [];
    for($i = 0; $i < 3; $i++) {
        $S []= explode(" ", trim(fgets(STDIN)));
    }
    
    $array = []; 
    fscanf(STDIN, "%d", $N);
    for($j = 0; $j < $N; $j++) {
        fscanf(STDIN, "%d", $M);
        $array [] = $M;
    }
    
    for($o = 0; $o < 3; $o++) {
        for($p = 0; $p < 3; $p++) {
            for($j = 0; $j < $N; $j++) {
                if(in_array($S[$o][$p], $array)) {
                    $S[$o][$p] = "#";
                }   
            }
        }
    }
    $hasBingo = false;
    
    for($i = 0; $i < 3; $i++) {
        if($S[$i][0] == "#" && $S[$i][1] == "#" && $S[$i][2] == "#") {
            $hasBingo = true;
            break;
        }
    }
    
    for ($j = 0; $j < 3; $j++) {
        if ($S[0][$j] == "#" && $S[1][$j] == "#" && $S[2][$j] == "#") {
            $hasBingo = true;
            break;
        }
    }

    if (($S[0][0] == "#" && $S[1][1] == "#" && $S[2][2] == "#") || ($S[0][2] == "#" && $S[1][1] == "#" && $S[2][0] == "#")) {
        $hasBingo = true;
    }
    
    if($hasBingo) {
        echo "Yes" . PHP_EOL;
    } else {
        echo "No" . PHP_EOL;
    }
