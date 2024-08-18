<?php
fscanf(STDIN, "%d%d", $N, $X);

$alc = [];
for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, "%d%d", $A, $B);
    $alc[] = [$A, $B];
}

$alc_count = 0;
foreach ($alc as $j => $drink) {
    $A = $drink[0]; // アルコールの量
    $B = $drink[1]; // 含有量
    
    // 除算による計算を避け、整数のままで処理
    $alc_result = $A * $B; 
    $alc_count += $alc_result;

    // Xも100倍して比較（整数で計算）
    if ($X * 100 < $alc_count) {
        echo $j + 1 . PHP_EOL;
        exit;
    }
}

// 全ての飲み物を飲んでもアルコール量が超えない場合
echo "-1" . PHP_EOL;

