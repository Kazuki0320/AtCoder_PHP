<?php
	fscanf(STDIN, "%d", $n);
	while($n % 2 === 0) {
		$n /= 2;
	}
	while($n % 3 === 0) {
		$n /= 3;
	}

	//処理1
	if($n === 1) {
		echo "Yes";
	} else {
		echo "No";
	}
	
	//処理2
	echo ($n === 1) ? 'Yes' : 'No';
?>
