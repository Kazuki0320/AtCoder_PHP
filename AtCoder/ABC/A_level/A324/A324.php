<?php
	$f  = (int)fgets(STDIN);
	$n  = explode(" ", trim(fgets(STDIN)));

	for($j = 1; $j < $f; $j++ ) {
		if($n[0] !== $n[$j]) {
			echo "No";
			exit;
		}
	}	
		echo "Yes";
?>