<?php
	list($A, $B) = explode(" ", trim(fgets(STDIN)));
	echo ($B >= $A && $B <= $A * 6) ? "Yes" : "No";
