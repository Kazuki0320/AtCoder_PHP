<?php
    $s = trim(fgets(STDIN));
    
    // 文字列の長さを確認
    if(strlen($s) !== 8) {
        echo "No";
        exit;
    }
    
    // 最初の文字と最後の文字を取得
    $first_char = $s[0];
    $last_char = $s[7];
    
    // 中間の６文字を取得
    $middle_part = substr($s, 1, 6);
    
    // 最初の文字と最後の文字が英大文字かどうかを確認
    if (!('A' <= $first_char && $first_char <= 'Z' && 'A' <= $last_char && $last_char <= 'Z')) {
        echo "No";
        exit;
    }

    // 中間の6文字が100000以上999999以下の整数かどうかを確認
    if (!is_numeric($middle_part) || (int)$middle_part < 100000 || (int)$middle_part > 999999) {
        echo "No";
        exit;
    }
    
    echo "Yes";
