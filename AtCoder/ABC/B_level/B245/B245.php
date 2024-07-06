<?php
    fscanf(STDIN, "%d", $N);

    $num = [];
    for($i = 0; $i < $N; $i++) {
        fscanf(STDIN, "%d", $A);
        $num = $A;
    }

    $num = array_unique($num);

    for($i = 0; $i < $N; $i++) {
        if(count($num) === 1) {
            echo $i;
            exit;
        }

        if($i === $num[$i]) {
            break;
        } else {
            echo $i;
        }
    }
