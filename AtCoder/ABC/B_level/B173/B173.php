<?php
    fscanf(STDIN, "%d", $N);

    $AC_count = 0;
    $TLE_count = 0;
    $WA_count = 0;
    $RE_count = 0;

    for($i = 0; $i < $N; $i++) {
        $imp = trim(fgets(STDIN));
        if("AC" == $imp) {
            $AC_count++;
        } else if("TLE" == $imp) {
            $TLE_count++;
        } else if("WA" == $imp) {
            $WA_count++;
        } else if("RE" == $imp) {
            $RE_count++;
        }
    }

    echo "AC" . " × " . $AC_count . "\n";
    echo "WA" . " × " . $WA_count . "\n";
    echo "TLE" . " × " . $TLE_count . "\n";
    echo "RE" . " × " . $RE_count . "\n";
