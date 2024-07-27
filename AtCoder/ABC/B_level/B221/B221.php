<?php
    $S = trim(fgets(STDIN));
    $T = trim(fgets(STDIN));

    $flag = true;
    for($i = 0; $i < strlen($S); $i++) {
        if($S[$i] != $T[$i]) {
            if($S[$i] === $T[$i+1] && $S[$i+1] === $T[$i]) {
                break;
            } else {
                $flag = false;
            }
        }
    }

    if($flag) {
        echo "Yes";
    } else {
        echo "No";
    }
