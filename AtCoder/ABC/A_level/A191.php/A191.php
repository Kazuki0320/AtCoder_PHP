<?php
	fscanf(STDIN, "%d%d%d%d", $V, $T, $S, $D);
	for($i = 1; $i < $S; $i++) {
		$m = $V * $i;
		if($D == $m) {
			if($T <= $i && $i <= $S) {
				echo "No";
				exit;
			} else {
				echo "No";
				exit;
			}
		}
	}
