<?php
    fscanf(STDIN, "%d %d %d", $K, $G, $M);

    // グラスとマグカップの初期状態
    $glass = 0;
    $mug = 0;

    for($i = 0; $i < $K; $i++) {
        // 条件(Condition): グラスが満杯であれば、水をすべて捨てる
        if($glass == $G) {
            $glass = 0;
        }
        // 条件(Condition): マグカップが空であれば、水で満たす
        else if ($mug == 0) {
            $mug = $M;
        }
        // 条件(Condition): それ以外の場合、マグカップからグラスへ水を移す
        else {
            // 移せる最大量を計算
            $transfer = min($mug, $G - $glass);
            // マグカップとグラスの水の量を更新
            $mug -= $transfer;
            $glass += $transfer;
        }
    }

    // 結果を出力（グラスの水の量、マグカップの水の量）
    echo $glass . " " . $mug . PHP_EOL;
?>
