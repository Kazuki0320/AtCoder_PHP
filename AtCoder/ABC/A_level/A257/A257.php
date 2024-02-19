<?php
	fscanf(STDIN, "%d %d", $N, $X);
	$alpha = range("A", "Z");
	$result = '';
	foreach ($alpha as $letter) {
	     $result .= str_repeat($letter, $N);
	}
	echo $result[$X - 1];
?>
