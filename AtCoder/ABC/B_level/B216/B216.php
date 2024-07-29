<?php
    fscanf(STDIN, "%d", $N);

    $inputs = [];
    $last_name = [];
    $first_name = [];
    $flag = false;

    for($i = 0; $i < $N; $i++) {
        fscanf(STDIN, "%s%s", $A, $B);
        
        $last_name []= $A;
        $first_name []= $B;
    }
    
    for($a = 0; $a < $N; $a++) {
        for($b = $a + 1; $b < $N; $b++) {
            if($last_name[$a] === $last_name[$b] && $first_name[$a] === $first_name[$b]) {
                $flag = true;
                break 2;
            }
        }
    }
    
    if($flag) {
        echo "Yes" . PHP_EOL;
    } else {
        echo "No" . PHP_EOL;
    }
