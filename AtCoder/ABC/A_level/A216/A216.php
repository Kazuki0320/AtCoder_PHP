<?php
	$S = explode(".", trim(fgets(STDIN)));
	
	$X = $S[0];
	$Y = $S[1];
	
	if(0 <= $Y && $Y <= 2) {
	    echo $X . "-";
	} else if(3 <= $Y && $Y <= 6) {
	    echo $X;
	} else if(7 <= $Y && $Y <= 9) {
	    echo $X . "+";
	}
