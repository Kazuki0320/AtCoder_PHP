<?php
	$inp = explode(" ", trim(fgets(STDIN)));
	$result = 0;

	if(count(array_unique($inp)) == 1) {
	    $result = $inp[0] + $inp[1];
	}

	$minNumber = min($inp);

	for($i = 0; $i < count($inp); $i++) {
		if($minNumber != $inp[$i]) {
			$result += $inp[$i];
		}
	}
	echo $result;
