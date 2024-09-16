<?php
    fscanf(STDIN,"%d%d%d",$N,$A,$B);
    $ans = 0;
    $AB = $A + $B;
    $ans = intdiv($N,$AB) * $A;
    $amari = $N % $AB;
    $ans += min($A,$amari);
    echo $ans . PHP_EOL;
?>
