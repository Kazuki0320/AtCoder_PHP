<?php
    fscanf(STDIN, "%s%s", $A, $B);
    fscanf(STDIN, "%d%d", $C, $D);
    fscanf(STDIN, "%s", $E);

    if($E == $A) {
        $result = $C--;
    } else {
        $result = $D--;
    }
    echo $result;

