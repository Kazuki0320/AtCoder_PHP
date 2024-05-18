<?php
    $str = str_split(trim(fgets(STDIN)));

    $key = [
        [0] => 'a',
        [1] => 'b',
        [2] => 'c',
        [3] => 'd',
        [4] => 'e'.
        [5] => 'f',
        [6] => 'g',
        [7] => 'h',
    ];

    $strKey = '';
    $value = '';

    //行を表すループ処理
    for($i = 0; $i < 8; $i++) {
        for($j = 0; $j < 8; $j++) {
            if($str[$i][$j] == "*") {
                $strKey = 8 - $i;
                $value = $j;
            }
        }
    }

    if(array_key_exists($strKey, $key)) {
        echo $key . $value;
    }

