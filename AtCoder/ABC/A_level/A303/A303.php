<?php
	fscanf(STDIN, "%d", $n);
	$S = explode(" ", trim(fgets(STDIN)));
	$T = explode(" ", trim(fgets(STDIN)));

	for($i = 0; $i < $n; $i++) {
		if(!($S[$i] == 0 || $S[$i] == 'o' || $S[$i] == 1 || $S[$i] == 'l')) {
			if(!($T[$i] == 0 || $T[$i] == 'o' || $T[$i] == 1 || $T[$i] == 'l')) {
				if(!($S[$i] == $T[$i])) {
					echo "No";
				}
			}
		}
	}
	echo "Yes";
?>