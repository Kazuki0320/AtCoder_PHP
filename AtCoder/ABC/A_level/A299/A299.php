<?php
	fscanf(STDIN, "%d", $N);
  $s = trim(fgets(STDIN));
    
	if (strpos($s, "|") < strpos($s, "*") && strrpos($s, "*") < strrpos($s, "|")) {
			echo "in". PHP_EOL;
		} else {
			echo "out". PHP_EOL;
	}
?>