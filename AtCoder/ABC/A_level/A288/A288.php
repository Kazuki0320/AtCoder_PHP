<?php
	fscanf(STDIN, "%d", $n);

	for($i = 0; $i < $n; $i++) {
		$s = explode(" ", trim(fgets(STDIN)));
		$result = $s[0] + $s[1];
		echo $result.PHP_EOL;
	}
?>
