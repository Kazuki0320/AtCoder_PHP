<?php
	$N = trim(fgets(STDIN));
	$graph = array_fill(0, 100, array_fill(0, 100, 0));

	for($i = 0; $i < $N; $i++) {
		list($x_min, $x_max, $y_min, $y_max) = explode(' ', trim(fgets(STDIN)));
		for($x = $x_min; $x < $x_max; $x++) {
			for($y = $y_min; $y < $y_max; $y++){
				$graph[$x][$y] = 1;
			}
		}
	}

	$count = 0;
	for($i = 0; $i < 100; $i++) {
		for($j = 0; $j < 100; $j++) {
			if($graph[$i][$j] == 1) {
				$count++;
			}
		}
	}
	echo $count.PHP_EOL;
?>


