<?php
    $S = str_split(trim(fgets(STDIN)));
    $T = str_split(trim(fgets(STDIN)));

    $strlenS = count($S);
    $strlenT = count($T);

    for($i = 0; $i < $strlenS; $i++) {
        $value = array_search($S[$i], $T);
        echo $value + 1 . " ";
        // 見つかった文字を削除して重複を防ぐ
        unset($T[$value]);
    }
