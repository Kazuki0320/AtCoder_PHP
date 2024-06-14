<?php
    fscanf(STDIN, "%d%d", $A, $B);
    
    for($i = 0; $i < $A; $i++) {
        $tmp = explode(" ", trim(fgets(STDIN)));
        array_shift($tmp);
        $ans[] = $tmp;
    }

    for($j = 0; $j < $B; $j++) {
        list($s, $t) = explode(" ", trim(fgets(STDIN)));
        echo $ans[$s-1][$t-1] . PHP_EOL;
    }
?>
