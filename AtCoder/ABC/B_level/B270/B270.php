<?php
    list($x,$y,$z) = explode(" ",trim(fgets(STDIN)));
    if($y<0) list($x,$y,$z) = [-$x,-$y,-$z];
    
    if($x<$y) {
        echo abs($x) . PHP_EOL;
    } else {
        if($z>$y) echo -1 . PHP_EOL;
        else echo abs($z) + abs($x-$z);
    }
?>
