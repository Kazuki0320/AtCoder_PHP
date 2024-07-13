<?php
    fscanf(STDIN, "%d", $n);

    $num = explode(" ", trim(fgets(STDIN)));

    $result = array_count_values($num);

    foreach($result as $key => $value) {
        if($value === 3) {
            echo $key;
        }
    }
