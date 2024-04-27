<?php
    $A = str_split(trim(fgets(STDIN)));
    for($i = 0; $i < count($A); $i++) {
         if($A[$i] == $A[$i + 1]) {
            echo "Bad";
            exit;
         }
    }
    echo "Good";
