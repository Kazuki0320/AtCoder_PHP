<?php

$A = trim(fgets(STDIN));
$DP = array(0, 0, 0, 0);

for ($i = 0; $i < 3; $i++) {
    if ($A[$i] == 'R') {
        $DP[$i+1] = $DP[$i] + 1;
    } 
}
echo max($DP);

?>
