<?php
    fscanf(STDIN, "%d%d", $H, $W);

    $N = [];
    for($i = 0; $i < $H; $i++) {
	    $N []= str_split(trim(fgets(STDIN)));
    }
    

    $count = 0;
    $array_value = [];
	for($i = 0; $i < $H; $i++) {
		for($j = 0; $j < $W; $j++) {
			if($N[$i][$j] == "o") {
			    // コマの位置を特定
				$positions []= [$i, $j];
			}
		}
	}

    $pos1 = $positions[0];
    $pos2 = $positions[1];
    
    $distance = abs($pos1[0] - $pos2[0]) + abs($pos1[1] - $pos2[1]);

    echo $distance;
