<?php
	$X = explode(" ", trim(fgets(STDIN)));
	$minPoint = min($X);
	$maxPoint = max($X);

	if(($minPoint + 3) > $maxPoint) echo "Yes";
   	else echo "No";
