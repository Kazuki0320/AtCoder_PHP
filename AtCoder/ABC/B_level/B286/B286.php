<?php
    fscanf(STDIN, "%d", $A);
    $str = trim(fgets(STDIN));

    $result = str_replace("na", "nya", $str);
    
    echo $result;
