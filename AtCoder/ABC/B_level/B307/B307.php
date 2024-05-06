<?php
fscanf(STDIN, "%d", $N);

$arr = [];
for ($i = 0; $i < $N; $i++) {
    $input = explode(" ", trim(fgets(STDIN)));
    $arr = array_merge($arr, $input);
}

$isStr = false;
for ($i = 0; $i < $N; $i++) {
    for ($j = 0; $j < $N; $j++) {
        if ($i === $j) {
             continue;
        }
        $strConcat = $arr[$i]. $arr[$j];
        $revStr = strrev($strConcat);
        if ($strConcat == $revStr) {
            $isStr = true;
            break;
        }
    }
}

echo ($isStr == true) ? "Yes" : "No";
