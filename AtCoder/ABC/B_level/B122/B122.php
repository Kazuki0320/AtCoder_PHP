<?php
    $S = trim(fgets(STDIN));

    $lengh = strlen($S);
    $maxLengh = 0; // 最長のACGT部分文字列の長さ
    $currecntLengh = 0; // 現在のACGT部分文字列の長さ

    for($i = 0; $i < $lengh; $i++) {
        if($S[$i] == 'A' || $S[$i] == 'C' || $S[$i] == 'G' || $S[$i] == 'T') {
            // ACGT文字の場合、長さを増やす
            $currecntLengh++;
            // 最長の長さを更新する
            if($currecntLengh > $maxLengh) {
                $maxLengh = $currecntLengh;
            }
        } else {
            // ACGT以外の文字が出た場合、現在の長さをリセット
            $currecntLengh = 0;
        }
    }

    echo $maxLengh . PHP_EOL;
