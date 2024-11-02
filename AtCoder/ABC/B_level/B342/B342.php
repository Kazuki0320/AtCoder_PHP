<?php
    fscanf(STDIN, "%d", $N);
    $P = array_map("intval", explode(" ", trim(fgets(STDIN))));
    fscanf(STDIN, "%d", $Q);

    for($i = 0; $i < $Q; $i++) {
        fscanf(STDIN, "%d %d", $A, $B);
        
        $A_search = array_search($A, $P);
        $B_search = array_search($B, $P);
        
        if($A_search < $B_search) {
            echo $P[$A_search] . PHP_EOL;
        } else {
            echo $P[$B_search] . PHP_EOL;
        }
    }
