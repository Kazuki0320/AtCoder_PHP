<?php
	$X = explode(" ", trim(fgets(STDIN)));
	
	$A = intval($X[0]);
	$B = intval($X[1]);
	$C = intval($X[2] * 2);
	
	if($A <= $C && $C <= $B) {
		echo $C;
	} else {
		echo -1;
	}
