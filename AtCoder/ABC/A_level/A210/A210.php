<?php
	fscanf(STDIN, "%d%d%d%d", $N, $A, $X, $Y);
	$Q = $A * $X;
	if($A <= $N) {
        	echo $Q + (($N - $A) * $Y);   
	} else {
		echo ($N * $X);
	}
