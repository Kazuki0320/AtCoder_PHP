<?php
	fscanf(STDIN, "%d", $N);
	$result = intval(1.08 * $N);
	$regularPrice = 206;
	if($result < $regularPrice) {
		echo "Yay!";
	} else if($result == $regularPrice) {
		echo "so-so";
	} else {
		echo ":(";
	}
