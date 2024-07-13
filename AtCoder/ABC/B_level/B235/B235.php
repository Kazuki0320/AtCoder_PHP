<?php
    fscanf(STDIN, "%d", $N);

    $num = explode(" ", trim(fgets(STDIN)));

    $currentLocation = $num[0];

    for($i = 1; $i < $N; $i++) {
        if($currentLocation < $num[$i]) {
            $currentLocation = $num[$i];
        } else if($num[$i] <= $currentLocation) {
            break;
        }
    }

    echo $currentLocation;
