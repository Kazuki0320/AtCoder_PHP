<?php
    fscanf(STDIN, "%d", $A);
    
    $culc = ($A - 998244353);
    $answer = $culc % 998244353;

    // 負の剰余結果を正の範囲に変換
    if ($answer < 0) {
        $answer += 998244353;
    }

    echo $answer;
