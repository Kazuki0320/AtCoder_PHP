<?php
    list($V,$T,$S,$D) = explode(" ",trim(fgets(STDIN)));    
    if($V*$T <= $D && $D <= $V*$S) echo "No" . PHP_EOL;
    else echo "Yes" . PHP_EOL;
?>
