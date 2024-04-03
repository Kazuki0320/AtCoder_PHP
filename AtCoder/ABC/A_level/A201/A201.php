<?php
	$list = explode(" ", trim(fgets(STDIN)));
	sort($list);
	$A = $list[1] - $list[0];  
	$B = $list[2] - $list[1];
	if(($A === $B) || ($A == 0 && $B == 0)) {
		echo "Yes";
	} else {
		echo "No";
	}
