<?php
fscanf(STDIN, "%d%d", $A, $B);
if ( ($A+$B)%2 == 0 ){
    echo ($A+$B)/2 ."\n";
}else{
    echo "IMPOSSIBLE" ."\n"; 
}
?>
