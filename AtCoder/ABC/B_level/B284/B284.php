<?php
    fscanf(STDIN, "%d", $A);

    $num = [];
    $imp = [];
    for($i = 0; $i < $A; $i++) {
        fscanf(STDIN, "%d", $B);
        $num[] = $B;
        $imp [] = array_map("intval", explode(" ", trim(fgets(STDIN))));
    }

    $result = [];
    for($p = 0; $p < $A; $p++){
        $n = 0;
        for($j = 0; $j < $num[$p]; $j++) {
                if($imp[$p][$j] % 2 == 1) {
                        $n++;
                }
        }
        $result [] = $n;
    }
    
    foreach ($result as $value) {
        echo $value . PHP_EOL;
    }
