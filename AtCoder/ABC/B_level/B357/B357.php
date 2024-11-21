<?php
    $S = trim(fgets(STDIN));

    $uppserCount = 0;
    $lowerCount = 0;

    for($i = 0; $i < count($S); $i++) {
        if(ctype_upper($S[$i])) {
            $upperCount++;
        } else {
            $lowerCount++;
        }
    }

    if($uppserCount > $lowerCount || $lowerCount == 0) {
        echo strtoupper($S) . PHP_EOL;
    } else {
        echo strtolower($S) . PHP_EOL;
    }
