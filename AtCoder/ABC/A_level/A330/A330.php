<?php
	fscanf(STDIN, "%d %d", $n, $m);
	$tens = fgets(STDIN);

	$arr = explode(" ", $tens);
	$total = 0;

	for($i = 0; $i < $n; $i++) {
		if($arr[$i] >= $m) {
			$total++;
		}				
	}
	print $total;
?>
