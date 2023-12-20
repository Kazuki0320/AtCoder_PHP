<?php
	fscanf(STDIN, "%d%d", $A, $B);

	$result = 0;
	$result1 = 0;

	$result = intdiv($A, $B);

	if($A % $B !== 0) {
		$result += 1;
	}
	echo $result;
?>
