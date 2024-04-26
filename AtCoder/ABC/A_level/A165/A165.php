<?php
    fscanf(STDIN, "%d", $A);
    list($B, $C) = explode(" ", trim(fgets(STDIN)));
    for($i = $B; $i <= $C; $i++) {
        if($i % $A == 0) {
            echo "OK";
            exit;
        }
    }
    echo "NG";

