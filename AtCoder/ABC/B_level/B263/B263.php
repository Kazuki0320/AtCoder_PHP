<?php
    fscanf(STDIN, "%d", $N);
    
    $num = explode(" ", trim(fgets(STDIN)));
    echo count($num);
