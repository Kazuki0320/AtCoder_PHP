<?php
	fscanf(STDIN, "%d %d", $A, $B);
	$result = $B / $A;
	$format = number_format($result, 3);
	echo $format;
?>

