<?php
	fscanf(STDIN, "%d", $N);
	$S = explode(" ", trim(fgets(STDIN));
	$result = 0;
	for($i = 0; $i < $N; $i++) {
		$result += $S[$i];
	}
	echo $result;
?>
