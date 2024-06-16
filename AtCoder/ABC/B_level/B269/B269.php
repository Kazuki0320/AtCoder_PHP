<?php

// 行のループ
for($i = 0; $i < 10; $i++) {
    $str = trim(fgets(STDIN));
    // 列のループ
    for($j = 0; $j < 10; $j++) {
        if($str[$j] == "#") {
	        $ab []= $i;
	        $cd []= $j;
        }
	}
}

echo min($ab) + 1 . " " . max($ab) + 1 . PHP_EOL;
echo min($cd) + 1 . " " . max($cd) + 1 . PHP_EOL;
