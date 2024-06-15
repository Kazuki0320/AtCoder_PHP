<?php
    fscanf(STDIN, "%d%d%d", $x, $y, $z);

    $result = -1;
    if($x < $y || $y < 0) {
        $result = abs($x);
    }

    if($z < $y && $z < $x) {
        $result = abs($z) + abs($x - $z);
    }

    if($result === -1) {
        echo -1;
    } else {
        echo $result;
    }
