<?php
    fscanf(STDIN, "%d", $N);

    $change = str_split((strrev(decbin($N))));

    $count = 0;
    for($i = 0; $i < count($change); $i++) {
        if($change[$i] == "0") {
            $count++;
        } else {
            break;
        }

        if ($change[0] == "1") {
            echo 0 . PHP_EOL;
            exit;
        }
    }
    
    echo $count . PHP_EOL;
