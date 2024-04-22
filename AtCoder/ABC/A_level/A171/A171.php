<?php
    fscanf(STDIN, "%s", $A);
    $ascii_value = ord($A);
    if(65 <= $ascii_value && $ascii_value <= 90) echo "A";
    else echo "a";
