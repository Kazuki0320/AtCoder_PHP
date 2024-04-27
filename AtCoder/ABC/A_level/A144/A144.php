<?php
    fscanf(STDIN, "%d%d", $A, $B);
    if(9 < $A || 9 < $B) {
        echo -1;
        exit;
    }
    echo ($A * $B);
?>
