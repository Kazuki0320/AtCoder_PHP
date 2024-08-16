<?php
    $S = str_split(trim(fgets(STDIN)));

    $flag = true;
    for($i = 0; $i < count($S); $i++) {
        if(($i+1) % 2 === 0 && !('A' <= $S[$i] && $S[$i] <= 'Z') || ($i+1) % 2 === 1 && !('a' <= $S[$i] && $S[$i] <= 'z')) {
            $flag = false;
            break;
        }
    }

    if($flag) echo "Yes" . PHP_EOL;
    else echo "No" . PHP_EOL;
