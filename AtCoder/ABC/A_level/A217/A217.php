<?php
	$S = explode(" ", trim(fgets(STDIN)));
	$A = $S[0];
	$B = $S[1];
	
	if($A < $B) {
	    echo "Yes";
	} else {
	    echo "No";
	}
