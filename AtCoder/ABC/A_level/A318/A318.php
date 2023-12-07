<?php
	fscanf(STDIN, "%d %d %d", $n, $m, $p);

	$result = [];
	while($m <= $n) {
		$result[] = $m;
		$m += $p;
	}

	echo count($result);
?>
