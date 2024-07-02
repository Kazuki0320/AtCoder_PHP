<?php   
    list($A, $B, $N) = explode(" ", trim(fgets(STDIN)));
    
    $result = $A;
    if($A >= $B) {
        echo 0;
        exit;
    }

    for($i = 1; $i <= $B; $i++) {
	    $result += $result * $N;

	    if($B <= $result) {
		    echo $i;
		    exit;
	    }
    }
