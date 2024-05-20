<?php
    list($H, $W) = explode(" ", trim(fgets(STDIN)));
    
    // 行列Aを読み込む
    $inp= [];
    for ($i = 0; $i < $H; $i++) {
        $inp[] = array_map('intval', explode(" ", trim(fgets(STDIN))));
    }

    // アルファベットのキーバリューの配列を作成
    $alphabetMap = array_merge(['.'], range('A', 'Z'));
    
    $S = [];
    for($i = 0; $i < $H; $i++) {
        $S[$i] = '';
	    for($j = 0; $j < $W; $j++) {
		    $value = $inp[$i][$j];
		    if($value == 0) {
		        $S[$i] .= ".";
		    } else {
		        $S[$i] .= $alphabetMap[$value];
		    }
	    }       
    }
    
    // 結果を出力
    foreach ($S as $line) {
        echo $line . PHP_EOL;
    }
