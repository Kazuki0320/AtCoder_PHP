<?php
    $S = trim(fgets(STDIN));
    echo preg_replace('/./', 'x', $S) . PHP_EOL;
