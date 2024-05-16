<?php
    fscanf(STDIN, "%d%d", $N, $T);
    $A = array_map("intval", explode(" ", trim(fgets(STDIN))));
    $B = array_map("intval", explode(" ", trim(fgets(STDIN))));
    
    $num = [];
    // $num 配列に $T に対応する $B の値を追加
    for($i = 0; $i < $N; $i++) {
        if($A[$i] === $T) {
            $num []= $B[$i];
        }
    }
    
    // $num 配列が空の場合は、$B の最初の要素をデフォルトで追加
    if(empty($num)) {
        $num []= $B[0];
    }

    // $num 配列の最大値を見つける
    $maxNumber = max($num);

    // 最大値に対応する $B の要素のインデックスを出力する
    $maxIndices = [];
    for($i = 0; $i < $N; $i++) {
        if($B[$i] === $maxNumber) {
            $maxIndices[] = $i + 1;
        } 
    }
    
    echo implode(" ", $maxIndices);
?>

