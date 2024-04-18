<?php
    fscanf(STDIN, "%d%d%d", $A, $B, $C);
    if(($A / $C) <= $B) echo "Yes";
    else echo "No";
