<?php
	fscanf(STDIN, "%d", $N);
	$S = explode(" ", trim(fgets(STDIN)));
	
	for($i = 0; $i < $N; $i++) {
		if($S[$i] % 2 == 0) {
			$merges = $S[$i];
			echo "$merges ";
		} else {
			continue;
		}
	}
?>
