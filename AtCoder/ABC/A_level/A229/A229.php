<?php
	$X = str_split(trim(fgets(STDIN)));
	$Y = str_split(trim(fgets(STDIN)));

	if($X[0] === '.' && $Y[1] === '.' || $X[1] === '.' && $Y[0] === '.') {
		echo "No";
		exit;
	}
	echo "Yes";
