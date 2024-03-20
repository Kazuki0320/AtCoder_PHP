<?php
	$N = explode(" ", trim(fgets(STDIN)));
	$A = $N[0];
	$B = $N[1];

	$result = $A - $B;
	echo pow(32, $result);
