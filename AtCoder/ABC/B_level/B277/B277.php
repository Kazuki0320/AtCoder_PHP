<?php
    fscanf(STDIN, "%d", $A);

    $str = [];
    for($i = 0; $i < $A; $i++) {
        $str [] = trim(fgets(STDIN));
        // 1文字目のチェック
        if(!($str[$i][0] == 'H' || $str[$i][0] == 'D' || $str[$i][0] == 'C' || $str[$i][0] == 'S')) {
            echo "No";
            exit;
        }
        
        // 2文字目のチェック
        if (!in_array($str[$i][1], ['A', '2', '3', '4', '5', '6', '7', '8', '9', 'T', 'J', 'Q', 'K'])) {
            echo "No";
            exit;
        }
    }
    
    if(!(count(array_unique($str)) == count($str))) {
        echo "No";
        exit;
    }
    

    echo "Yes";
