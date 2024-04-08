<?php
	list($M, $H) = explode(" ", trim(fgets(STDIN)));
	if($H % $M === 0) {
		echo "Yes";
	} else {
		echo "No";
	}
