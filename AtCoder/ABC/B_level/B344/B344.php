<?php
    $num = [];
    while($a = fgets(STDIN)) $num[] = trim($a);

    $count = count($num);
    for($j = $count - 1; $j >= 0; $j--) {
        echo $num[$j] . PHP_EOL;
    }
