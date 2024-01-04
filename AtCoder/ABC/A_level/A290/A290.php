<?php
	fscanf(STDIN, "%d %d", $M, $A);
	$M_A = explode(" ", trim(fgets(STDIN)));
	$R = explode(" ", trim(fgets(STDIN)));

	$result = 0;
	for($i = 0; $i < $A; $i++) {
		$result += $M_A[$R[$i]-1];
	}
	echo $result;
?>
