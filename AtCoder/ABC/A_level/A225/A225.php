<?php
	$S = str_split(trim(fgets(STDIN)));
    $count = count(array_unique($S));
    
	if($count === 1) {
		echo 1;
	} else if($count === 2) {
		echo 3;
	} else if($count === 3) {
		echo 6;
	}
