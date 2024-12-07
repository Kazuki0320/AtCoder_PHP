<?php
    fscanf(STDIN, "%d", $N);
    $S = explode(" ", trim(fgets(STDIN)));
    $newS = $S;
    rsort($newS);
    
    // array_searchで、インデックスを取得できる
    $index = array_search($newS[1], $S);
    echo $index + 1 . PHP_EOL;
