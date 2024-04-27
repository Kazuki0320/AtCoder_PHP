<?php
    $A = str_split(trim(fgets(STDIN)));
    $counts = array_count_values($A);
    $result = reset($counts);

    if($result == 3) echo "No";
    else echo "Yes";
