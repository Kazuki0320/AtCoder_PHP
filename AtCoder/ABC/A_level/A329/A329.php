<?php
	//例1
	$line = fgets(STDIN);
	$splits = str_split($line, 1);
	$result = implode(' ', $splits);

	echo($result);
	
	//例2
	$c = strlen($line);
	for($i = 0; $i < $c; $i++) {
		echo $line[$i]." ";
		}
?>