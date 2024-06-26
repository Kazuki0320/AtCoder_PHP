<?php
    fscanf(STDIN, "%d", $N);

    $A = [];
    for ($i = 0; $i < $N; $i++) {
	    $A[$i] = [];
	    for ($j = 0; $j <= $i; $j++) {
		    if($j == 0 || $j == $i) {
	            $A[$i][$j] = 1;
            } else {
	            $A[$i][$j] = $A[$i-1][$j-1] + $A[$i-1][$j];
            }
	    }
    }
    
    foreach($A as $value) {
	    echo implode(" ", $value) . PHP_EOL;
    }
