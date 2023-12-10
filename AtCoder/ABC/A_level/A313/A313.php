<?php
	fscanf(STDIN, "%d", $c);
	$p = explode(" ", trim(fgets(STDIN)));
	
	$result = 0;

	for($i = 1; $i < $c; $i++) {
		if($p[0] <= $p[$i]) {
			$result = max($result, ($p[$i] + 1) - $p[0]);
		}
	}
	echo $result;
?>
