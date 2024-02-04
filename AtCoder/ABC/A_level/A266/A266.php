<?php
	$S = trim(fgets(STDIN));
	echo $S[(strlen($S) + 1) / 2 - 1] . PHP_EOL;
?>
