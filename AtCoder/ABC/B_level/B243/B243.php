<?php
    fscanf(STDIN, "%d", $N);
    $A = explode(" ", trim(fgets(STDIN)));
    $B = explode(" ", trim(fgets(STDIN)));

    $exact_matches = 0;
    $partial_matches = 0;

    for($i = 0; $i < $N; $i++) {
        if($A[$i] === $B[$i]) {
            $exact_matches++;
        } else {
            // $A[$i] が $B に存在するが異なるインデックスにある場合をチェック
            $index_in_B = array_search($A[$i], $B);
            if ($index_in_B !== false && $index_in_B != $i) {
                $partial_matches++;
            }
        }
    }
    
    echo "$exact_matches\n";
    echo "$partial_matches\n";
?>

