<?php
	$n = explode(" ", trim(fgets(STDIN)));

	for($i = 0; $i < 7; $i++) {
		if(!($n[$i] <= $n[$i + 1]) || !($n[$i] >= 100 && $n[$i] <= 675) || !($n[$i] % 25 == 0)) {
			echo "No";
			exit;
		}
	}
	echo "Yes";
?>
