<?php
    $S = trim(fgets(STDIN));
    
    $SA = "";
    $SB = "";
    $SC = "";

    for($i = 0; $i < strlen($S); $i++) {
        if($S[$i] == "A") {
            $SA .= $S[$i];
        } else if($S[$i] == "B") {
            $SB .= $S[$i];
        } else if($S[$i] == "C") {
            $SC .= $S[$i];
        }
    }
    
    $SABC = $SA . $SB . $SC;

    if($SABC == $S) {
        echo "Yes". PHP_EOL;
    } else {
        echo "No" . PHP_EOL;
    }
