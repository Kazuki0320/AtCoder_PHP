<?php
    list($a,$b,$c,$d,$e,$f) = explode(" ",trim(fgets(STDIN)));
    $mod=998244353;
    $x = (($a%$mod) * ($b%$mod)) % $mod;
    $x = ($x * ($c%$mod)) %$mod;
    $y = (($d%$mod) * ($e%$mod)) % $mod;
    $y = ($y * ($f%$mod)) %$mod;
    echo ($x+$mod-$y)%$mod . PHP_EOL;
?>
