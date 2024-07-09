<?php
    fscanf(STDIN, "%d", $A);
    
    $numbers = explode(" ", trim(fgets(STDIN)));
    echo count(array_unique($numbers));
