<?php
fscanf(STDIN, "%d%d", $A, $B);
$imp = [];

// 入力を配列に格納
for ($i = 0; $i < $A; $i++) {
    $imp[] = trim(fgets(STDIN));
}

$count = 0;

// 行の比較
for ($i = 0; $i < $A; $i++) {
    for ($j = $i + 1; $j < $A; $j++) {
        $match = true;
        for ($p = 0; $p < $B; $p++) {
            if ($imp[$i][$p] == 'x' && $imp[$j][$p] == 'x') {
                $match = false;
                break;
            }
        }
        if ($match) {
            $count++;
        }
    }
}

echo $count;
