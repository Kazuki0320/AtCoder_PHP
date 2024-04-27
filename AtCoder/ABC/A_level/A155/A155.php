<?php
    fscanf(STDIN,"%d%d%d",$a[],$a[],$a[]);
    $a = array_unique($a);
    if(count($a) == 2) echo "Yes";
    else echo "No";:
