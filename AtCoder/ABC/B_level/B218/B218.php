<?php
    $N = explode(" ", trim(fgets(STDIN)));
    for($i = 0; $i < count($N); $i++) {
        echo chr($N[$i-1] + 97);
    };
