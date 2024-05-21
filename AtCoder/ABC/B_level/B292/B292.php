<?php
// 標準入力から読み取る
fscanf(STDIN, "%d %d", $N, $Q);

// 選手ごとのカードカウントを追跡する配列を初期化
$yellow_cards = array_fill(1, $N, 0);
$ejected = array_fill(1, $N, false);

for ($i = 0; $i < $Q; $i++) {
    // イベントを読み取る
    fscanf(STDIN, "%d %d", $c, $x);
    
    if ($c === 1) {
        // イエローカードが提示された場合
        if (!$ejected[$x]) {
            $yellow_cards[$x]++;
            if ($yellow_cards[$x] == 2) {
                $ejected[$x] = true;
            }
        }
    } elseif ($c === 2) {
        // レッドカードが提示された場合
        if (!$ejected[$x]) {
            $ejected[$x] = true;
        }
    } elseif ($c === 3) {
        // 退場処分の質問があった場合
        if ($ejected[$x]) {
            echo "Yes\n";
        } else {
            echo "No\n";
        }
    }
}

