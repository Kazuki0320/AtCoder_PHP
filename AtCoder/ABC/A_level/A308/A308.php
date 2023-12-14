<?php
	fscanf(STDIN, "%d", $n);

	for($i = 0; $i < 8; $i++) {
		if($n[$i] < $n[$i] && ($n >= 100 && $n <= 675) && ($n % 25 == 0)) {
			echo "Yes";
		} else {
			echo "No";
		}
	}
?>
