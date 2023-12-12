<?php
fscanf(STDIN, "%d", $n);
$s = str_split(trim(fgets(STDIN)));

$A_count = 0;
$B_count = 0;
$C_count = 0;
for ($i = 0; $i < $n; $i++) {
    if ($s[$i] === 'A') {
        $A_count++;
    } else if ($s[$i] === 'B') {
        $B_count++;
    } else if ($s[$i] === 'C') {
        $C_count++;
    }
    if ($A_count >= 1 && $B_count >= 1 && $C_count >= 1) {
        echo ($i + 1);
        break;
    }
}
?>
