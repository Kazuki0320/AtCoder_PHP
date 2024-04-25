<?php
    fscanf(STDIN, "%s", $A);
    fscanf(STDIN, "%s", $B);
    $B = substr($B, 0, -1);

    for($i = 0; $i < strlen($A); $i++) {
        if($A[$i] != $B[$i]) {
            echo "No";
            exit;
        }
    }
    echo "Yes";
