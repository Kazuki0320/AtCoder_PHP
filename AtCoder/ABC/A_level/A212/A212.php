<?php
	fscanf(STDIN, "%d%d", $A, $B);
	if(0 < $A && $B == 0) echo "Gold";
	if($A == 0 && 0 < $B) echo "Silver";
	if(0 < $A && 0 < $B) echo "Alloy";
