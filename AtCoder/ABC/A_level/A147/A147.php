<?php
    fscanf(STDIN, "%d%d%d", $A, $B, $C);
    echo (($A + $B + $C) <= 21) ? "win" : "bust";
