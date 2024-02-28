<?php

fscanf(STDIN, "%d %d %d %d", $A, $B, $C, $D);
if(($A * 60 + $B) < ($C * 60 + $D + 1)) {
    echo "Takahashi";
} else {
    echo "Aoki";   
}
