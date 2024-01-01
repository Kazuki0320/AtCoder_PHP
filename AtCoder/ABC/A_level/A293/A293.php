<?php
	$S = trim(fgets(STDIN));

	for($i = 0; $i < strlen($S-1); $i++) {
		$X = [];
		$X = $S[$i+1];
		$S[$i+1] = $S[$i];
		$S[$i] = $X;
	}
	echo $S;
?>
