<?php
    list($x, $k) = explode(" ", trim(fgets(STDIN)));

    // 四捨五入をk回繰り返す
    for ($i = 1; $i <= $k; $i++) {
        $x = round($x, -($i));
    }

    echo sprintf("%.0f", $x);
