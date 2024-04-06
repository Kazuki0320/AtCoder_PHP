<?php
	$S = str_split(trim(fgets(STDIN)));
	$S1 = array_shift($S);
	$S2 = implode("", $S);
	echo $S2 . $S1;

