<?php
    function move_towards($A, $B) {
        $distance = sqrt($A * $A + $B * $B);

        $x = $A / $distance;
        $y = $B / $distance;

        return [$x, $y];
    }

    fscanf(STDIN, "%d%d", $A, $B);
    [$x, $y] = move_towards($A, $B);

    printf("%.12f %.12f\n", $x, $y);
