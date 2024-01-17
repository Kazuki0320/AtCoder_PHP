<?php
	fscanf(STDIN, "%d %d", $H, $W);
	$result = 0;
	for($i = 0; $i < $H; $i++) {
		$S = trim(fgets(STDIN));
		for($j = 0; $j < $W; $j++) {
			if($S[$j] === "#") {
				$result++;
			}
		}
	}
	echo $result;
?>
