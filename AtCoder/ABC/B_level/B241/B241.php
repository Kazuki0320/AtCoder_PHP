<?php
    fscanf(STDIN, "%d%d", $N, $M);

    $pasta_length = [];
    $eat_day = [];
    $flag = true;

    // 麺の長さ
    $pasta_length = array_map("intval",explode(" ", trim(fgets(STDIN))));

    // 食事計画日数
    $eat_day = array_map("intval", explode(" ", trim(fgets(STDIN))));
    
    for($i = 0; $i < $M; $i++){
        if(!in_array($eat_day[$i], $pasta_length, true)) {
            $flag = false;
        }
        
        if($N < $M) {
            $flag = false;
        }
        
        if (count($eat_day) !== count(array_unique($eat_day))) {
            $flag = false;
        }
    }

    if($flag) {
        echo "Yes";
    } else {
        echo "No";
    }
