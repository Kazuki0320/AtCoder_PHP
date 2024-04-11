<?php
	fscanf(STDIN, "%d%d%d", $A,$B,$C);
	if(($C == 0 && $A == $B) || ($B > $A)) {
	    echo "Aoki";
	} else if($C == 1 && $A == $B || ($A > $B)) {
	    echo "Takahashi";
	}
