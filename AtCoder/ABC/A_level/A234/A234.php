<?php
    fscanf(STDIN, "%d", $N);
    
    function f($t) {
        return pow($t, 2) + 2 * $t + 3;;
    }
    
    $t = intval($N);
    
    $result = f(f(f($t) + $t) + f(f($t)));

    echo $result;
