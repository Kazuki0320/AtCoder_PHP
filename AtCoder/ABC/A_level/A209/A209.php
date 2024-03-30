<?php
	list($A, $B) = explode(" ", trim(fgets(STDIN)));
	$count = $B - $A + 1;
	$result = max(0, $count);
	echo $result;
