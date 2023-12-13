<?php
	fscanf(STDIN, "%d%d%d", $n, $p, $q);
	$d = explode(" ", trim(fgets(STDIN)));

	$min = min($d);
		if($p > $min+$q) {
			echo $q + $min;
		} else {
			echo $p;
		}
?>
