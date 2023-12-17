<?php
    $km = intval(trim(fgets(STDIN)));

    if ($km % 5 == 1 || $km % 5 == 2) {
        echo $km - ($km % 5);
    } else if ($km % 5 == 3 || $km % 5 == 4) {
        echo $km + (5 - $km % 5);
    } else {
        echo $km;
    }
?>
