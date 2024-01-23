<?php
	fscanf(STDIN, "%d%d", $C, $N);
	$val = array_map('intval', explode(" ", trim(fgets(STDIN))));
	$result = array_search($N, $val);
	echo($result+1);
?>
