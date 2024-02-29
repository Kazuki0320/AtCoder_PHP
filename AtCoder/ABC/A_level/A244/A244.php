<?php
    fscanf(STDIN, "%d", $N);
    fscanf(STDIN, "%s", $S);

    echo substr($S, $N-1, 1);
?>
