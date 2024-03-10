<?php
    fscanf(STDIN, "%d", $N);
    if(pow(2, $N) > pow($N, 2)) {
        echo "Yes";
        exit;
    } else {
        echo "No";   
    }
