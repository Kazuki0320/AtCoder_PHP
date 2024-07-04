<?php
function can_assign_nicknames($N, $names) {
    $surnames = array_column($names, 0);
    $given_names = array_column($names, 1);
    
    foreach ($names as $i => $name) {
        $si = $name[0];
        $ti = $name[1];
        
        $si_valid = true;
        $ti_valid = true;
        
        for ($j = 0; $j < $N; $j++) {
            if ($i != $j) {
                if ($si == $surnames[$j] || $si == $given_names[$j]) {
                    $si_valid = false;
                }
                if ($ti == $surnames[$j] || $ti == $given_names[$j]) {
                    $ti_valid = false;
                }
            }
        }
        
        if (!$si_valid && !$ti_valid) {
            return "No";
        }
    }
    
    return "Yes";
}

// 標準入力からのデータ読み取り
fscanf(STDIN, "%d", $N);
$names = [];
for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, "%s %s", $si, $ti);
    $names[] = [$si, $ti];
}

// 結果の出力
echo can_assign_nicknames($N, $names) . "\n";
