<?php
    $str_array = [];
    for($i = 0; $i < 3; $i++) {
        $str_array []= trim(fgets(STDIN));
    }

    $num =str_split(trim(fgets(STDIN)));
    
    foreach($num as $v) {
        echo $str_array[(int)$v-1];
    }
