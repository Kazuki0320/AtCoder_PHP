<?php
	list($S1, $S2) = explode(" ", trim(fgets(STDIN)));
	$A = 0;
	$B = 0;
	
	for($i = 0; $i < strlen($S1); $i++) {
		$A += $S1[$i];
	}
	for($i = 0; $i < strlen($S2); $i++) {
		$B += $S2[$i];
	}

	$result = max($A, $B);
	echo $result;
