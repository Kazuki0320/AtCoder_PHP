<?php
    fscanf(STDIN, "%d", $N);
    $S = trim(fgets(STDIN));

    $count = substr_count($S, "ABC");

    echo $count . PHP_EOL;
?>

