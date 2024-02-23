<?php
    fscanf(STDIN, "%s", $S);
    if(strlen($S) === 3) {
        $S3 = $S . $S;
        echo $S3;
        exit;
    } else if(strlen($S) === 2) {
        $S2 = $S . $S . $S;
        echo $S2;
        exit;
    } else if(strlen($S) === 1) {
        $S1 = $S . $S . $S . $S . $S . $S;
        echo $S1;
        exit;
    }
?>
