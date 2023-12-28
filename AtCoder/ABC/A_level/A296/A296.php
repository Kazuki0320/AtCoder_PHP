<?php
	fscanf(STDIN, "%d", $N);
	
	$S = trim(fgets(STDIN));

	for($i = 0; $i < $N-1; $i++) {
		if((($S[$i] == "M") && ($S[$i+1] == "M")) || (($S[$i] == "F") && ($S[$i+1] == "F"))) {
			echo "No";
			exit;
		}
	}
	echo "Yes";
?>
