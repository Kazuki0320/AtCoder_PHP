<?php
	fscanf(STDIN, "%d %d", $n, $s);
	$e  = explode(" ", fgets(STDIN));

	for($i = 0; $i < $n; $i++) {
		if($s >= $e[$i]) {
			$result += $e[$i];
		}
	}
	print $result;
?>
