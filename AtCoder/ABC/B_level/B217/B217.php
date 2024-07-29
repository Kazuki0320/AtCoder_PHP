<?php
    $S = [
        "ABC",
        "ARC",
        "AGC",
        "AHC"
    ];

    $inputs = [];
    for ($i = 0; $i < 3; $i++) {
        fscanf(STDIN, "%s", $A);
        $inputs[] = $A;
    }

    foreach($inputs as $input) {
        foreach($S as $key => $value) {

            if($value === $input) {
                unset($S[$key]);
            }
        }
    }
    
    foreach ($S as $value) {
        echo $value . PHP_EOL;
    }
