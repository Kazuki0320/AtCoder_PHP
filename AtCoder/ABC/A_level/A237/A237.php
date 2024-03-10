<?php
    fscanf(STDIN, "%d", $N);
    if(pow(-2, 31) <= $N && $N < pow(2, 31)) {
        echo "Yes";
    } else {
        echo "No";
    }
