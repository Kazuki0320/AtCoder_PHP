<?php
    fscanf(STDIN, "%d", $N);
    $result = $N * (12800000 + $N);
    echo sqrt($result);
