<?php
    $S = str_split(trim(fgets(STDIN)));

    $flag = true;
    $A1 = [];
    $B1 = [];

    for($i = 0; $i < count($S); $i++) {
        // var_dump($S);
        $S1 = array_reverse($S);
        if($S[$i] != $S1[$i]) {
            $flag = false;
        }
    }

    $A1 = array_slice($S, 0, (count($S)-1)/2);
    $B1 = array_slice($S, ((count($S)+3)/2)-1, count($S));

    for($j = 0; $j < (count($S)-1)/2; $j++) {
        $A2 = array_reverse($A1);
        if($A1[$j] != $A2[$j]) {
            $flag = false;
        }
     }
     
    for($j = 0; $j < count($B1); $j++) {
        $B2 = array_reverse($B1);
        if($B1[$j] != $B2[$j]) {
            $flag = false;
        }
     }
     
     if($flag) {
         echo "Yes" . PHP_EOL;
     } else {
         echo "No" . PHP_EOL;
     }
