<?php
    fscanf(STDIN, "%s", $S);
    
    $characters = str_split($S);
    sort($characters);
    
    $result = implode("", $characters);
    echo $result;
