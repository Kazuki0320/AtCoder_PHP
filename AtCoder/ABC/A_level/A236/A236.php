<?php
    $strs = str_split(trim(fgets(STDIN)));
    fscanf(STDIN, "%d%d", $N1, $N2);
    $x = "";
    for($i = 0; $i < count($strs); $i++) {
        if(($N1-1) === $i) {
            $x = $strs[$N1-1];
        }
        if(($N2-1) === $i) {
            $strs[$N1-1] = $strs[$N2-1];
            $strs[$N2-1] = $x;
        }
    }
    foreach ($strs as $str) {
        echo $str;
    }
