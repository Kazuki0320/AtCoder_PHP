<?php
    $N = trim(fgets(STDIN));
    if($N <= 9) {
        //0$B$r(B2$B$D=PNO(B
        echo "AGC0". "0". $N;
        exit;
    } else {
        //0$B$r(B1$B$D=PNO(B
        if(42 <= $N) {
            echo "AGC0". $N + 1;
            exit;
        } else {
            echo "AGC0". $N;
            exit;
        }
    }
