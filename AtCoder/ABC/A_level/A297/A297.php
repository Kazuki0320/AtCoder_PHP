<?php
	fscanf(STDIN, "%d %d", $N, $T);
	$S = explode(" ", trim(fgets(STDIN)));

  $result = -1;
	for($i = 0; $i < $N -1; $i++) {
		if($S[$i+1] - $S[$i] <= $T) {
			$result = $S[$i+1];
			break;
		}
	}
	echo $result;
?>