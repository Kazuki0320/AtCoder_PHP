<?php
	fscanf(STDIN, "%d%d%d", $A, $B, $C);
	echo (($A * $A) + ($B * $B) < ($C * $C)) ? "Yes" : "No";
