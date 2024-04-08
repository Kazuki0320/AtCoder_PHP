<?php
	fscanf(STDIN, "%d%d", $A, $B);
	$C = $A + $B;
	if(15 <= $C && 8 <= $B) echo "1";
	else if(10 <= $C && 3 <= $B) echo "2";
	else if(3 <= $C) echo "3";
	else echo "4";
