<?php

fscanf(STDIN, "%d", $N);

$k = 0;

while (2 ** ($k + 1) <= $N) {
    $k++;
}

echo $k;
