<?php
    fscanf(STDIN, "%d", $N);
    
    $S = str_split(trim(fgets(STDIN)));
    $S = array_map('intval', $S);
    $result = 1;

    for($i = 0; $i < $N; $i++) {
        if(1 == $S[$i]) {
            $result += $i;
            break;
        }
    }

    if($result % 2 == 1) {
        echo "Takahashi" . PHP_EOL;
    } else {
        echo "Aoki" . PHP_EOL;
    }
