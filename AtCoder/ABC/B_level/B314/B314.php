<?php
    fscanf(STDIN, "%d", $number);
    $circleRatio = 1415926535897932384626433832795028841971693993751058209749445923078164062862089986280348253421170679;
    $arrayCircleRatio = str_split($circleRatio);
    for($i = 0; $i < $number; $i++) {
        echo $arrayCircleRatio[$i];
    }
