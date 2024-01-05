<?php
	fscanf(STDIN, "%s", $S);

	$result = "";
	for($i = 0; $i < strlen($S); $i++) {
		if($S[$i] == 1) {
			$result = str_replace(1, 0, $S[$i]);
		} else {
			$result = str_replace(0, 1, $S[$i]);
		}
	}
	echo $result;
?>
