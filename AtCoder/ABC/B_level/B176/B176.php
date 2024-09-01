<?php
    fscanf(STDIN, "%s", $S);

    $total = 0;
    $len = strlen($S);
    for($i = 0; $i < $len; ++$i) $total += $S[$i];
    if($total % 9 == 0) echo "Yes";
    else echo "No";
