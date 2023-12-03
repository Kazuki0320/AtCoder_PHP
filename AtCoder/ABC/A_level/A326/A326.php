<?php
	fscanf(STDIN, "%d%d", $n, $m);
	if (($n <= $m && $m - $n <= 2) || ($n > $m && $n - $m <= 3)) {
		echo "Yes";
	} else {
		echo "No";
	}
?>
