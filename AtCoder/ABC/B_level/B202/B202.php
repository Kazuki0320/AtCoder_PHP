<?php
    $S = trim(fgets(STDIN));

    $change_s = strrev($S);

    for($i = 0; $i < strlen($S); $i++) {
        if($change_s[$i] == '6') {
            echo 9;
        } else if($change_s[$i] == '9') {
            echo 6;
        } else {
            echo $change_s[$i];
        }
    }
