<?php
	$m = fgets(STDIN);
	$s = str_split($m);

	for($i = 1; $i <= $m; $i++) {
		if($s[$i] % 2 === '0' && $s[$i] === '0') {
			echo "Yes";
		}
		echo "No";
	}
?>
