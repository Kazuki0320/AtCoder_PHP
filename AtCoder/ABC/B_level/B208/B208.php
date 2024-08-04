<?php
    $P = trim(fgets(STDIN));
    $N[0] =1;
    for($i=1; $i<=10; $i++) {
        $N[$i] = $N[$i-1]*$i;
    }
    $c=0;
    for($i=10; $i>=1; $i--) {
        if($P>=$N[$i]) {
            $c += floor($P/$N[$i]);
            $P -= $N[$i]*floor($P/$N[$i]);
        }
    }
    echo $c . PHP_EOL;
?>
