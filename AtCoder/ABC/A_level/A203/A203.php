<?php
	list($A, $B, $C) = explode(" ", trim(fgets(STDIN)));
	if(($A == $B) && ($A == $C) && ($B == $C))  {
		echo $C;
	} else if ($A == $B) {
		echo $C;
	} else if ($B == $C ) {
		echo $A;
	} else if ($A == $C) {
		echo $B;
	} else if ($A != $B && $A != $C && $B != $C) {
	    echo 0;
	}
