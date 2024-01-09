<?php
fscanf(STDIN, "%d %d", $FN, $SN);

if(($FN * 2 === $SN) || ($FN * 2 + 1 === $SN)) echo "Yes\n";
else echo "No\n";
?>
