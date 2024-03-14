<?php
    $N = trim(fgets(STDIN));
    if($N <= 9) {
        //0を2つ出力
        echo "AGC0". "0". $N;
        exit;
    } else {
        //0を1つ出力
        if(42 <= $N) {
            echo "AGC0". $N + 1;
            exit;
        } else {
            echo "AGC0". $N;
            exit;
        }
    }
