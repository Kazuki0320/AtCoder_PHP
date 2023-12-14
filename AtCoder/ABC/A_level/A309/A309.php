<?php
	fscanf(STDIN, "%d %d", $A, $B);

	if (($A == 1 || $A == 2 || $A == 4 || $A == 5 || $A == 7 || $A == 8) && ($A+1 === $B)) { 
		echo "Yes";
	} else {
		echo "No";
	}
?>

