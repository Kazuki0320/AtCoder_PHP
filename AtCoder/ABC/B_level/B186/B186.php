<?php
    fscanf(STDIN, "%d%d", $H, $W);

    $sum = 0;
    for($i = 0; $i < $H; $i++) {
        $block = explode(" ", trim(fgets(STDIN)));
        foreach($block as $block_m) {
            $b [] = $block_m;
        }
    }

    $min = min($b);
    foreach($b as $b_m) {
        $sum += ($b_m - $min);
    }

    echo $sum;
