<?php
    fscanf(STDIN, "%s", $A);
    fscanf(STDIN, "%s", $B);

    if(str_contains($A, $B)) {
        echo "Yes";
        exit;
    }

    echo "No";
