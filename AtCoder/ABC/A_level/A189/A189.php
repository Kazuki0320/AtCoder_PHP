<?php
 	fscanf(STDIN, "%s", $S);
	$A = str_split($S);
	$result= array_unique($A);
    
	if(count($result) == 1) echo "Won";
	else echo "Lost";
