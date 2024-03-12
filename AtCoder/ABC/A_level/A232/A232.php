<?php
    $N = explode(" ", trim(fgets(STDIN)));
    $typeCount = $N[0];
    $all = $N[1];
    $cost = $N[2];
    $prices = [];
    $quantities = [];
    
    for($i = 0; $i < $typeCount; $i++) {
        fscanf(STDIN, "%d %d", $p, $q);
        $prices[] = $p;
        $quantities[] = $q;
    }

    $total = 0;
    for($i = 0; $i < $typeCount; $i++) {
        $total += $prices[$i] * $quantities[$i];
    }
    $shopping = ($total >= $all) ? 0 : $cost;
    $result = $total + $shopping;
    echo $result;
