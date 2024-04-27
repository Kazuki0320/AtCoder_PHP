<?php
    fscanf(STDIN, "%d", $number);
    fscanf(STDIN, "%s", $str);

    if(3200 <= $number) echo $str;
    else echo "red";
