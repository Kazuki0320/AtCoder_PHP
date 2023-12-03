<?php
	$f  = explode(" ", fgets(STDIN));

	$n = strlen($f[0]);
	$m = strlen($f[1]);

	if($n >= 1 && $n <= 10 || $m >= 1 && $m <= 10) {
		echo $f[0] . " san";
	}
?>
