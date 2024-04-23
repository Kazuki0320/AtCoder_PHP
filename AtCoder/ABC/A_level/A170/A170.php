<?php
    $x = explode(" ", trim(fgets(STDIN)));
    $s = implode($x);

    for($i = 0; $i < strlen($s); $i++) {
        if($s[$i] == 0) {
            echo $i + 1;
        }
    }
   
