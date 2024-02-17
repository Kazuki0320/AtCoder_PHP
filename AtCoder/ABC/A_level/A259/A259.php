<?php
	fscanf(STDIN, "%d %d %d %d %d", $n, $m, $x, $t, $d);

	if($m >= $x && $n >= $x) {
		$natural_heigh = $t;
	} else {
		$natural_heigh = $t - $x * $d + $m * $d;
	}

	echo $natural_heigh;
?>
