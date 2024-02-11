<?php

$input = trim(fgets(STDIN));
$numbers = explode(" ", $input);

$L1 = $numbers[0];
$R1 = $numbers[1];
$L2 = $numbers[2];
$R2 = $numbers[3];

function commonLength($L1, $R1, $L2, $R2) {
    // 共通部分がない場合
    if ($R1 < $L2 || $R2 < $L1) {
        return 0;
    }
    // 共通部分がある場合
    return min($R1, $R2) - max($L1, $L2);
}

$result = commonLength($L1, $R1, $L2, $R2);
echo $result;

?>


