<?php
	$QPSR = explode(" ", trim(fgets(STDIN)));
	$A = explode(" ", trim(fgets(STDIN)));
	
	var_dump($QPSR);
	var_dump($A);
	$result1 = "";
	$result2 = "";
	$ans = $QPSR[2] - $QPSR[1];
	for($i = 0; $i < $QPSR[0]; $i++) {
	    if($QPSR[1] == $A[$i]) {
	        if($QPSR[2] == $A[$i+$ans]) {
	            for($j = 0; $j < $A[$i+$ans]; $j++) {
	                $result1 .= $A[$j];
	            }
	        }
	    } else if($QPSR[3] == $A[$i]) {
	        if($QPSR[4] == $A[$i+$ans]) {
	            for($k = 4; $k < $A[$i+$ans]; $k++) {
	                $result2 .= $A[$k];
	            }
	        }
	    }
	}
	echo $result1;
	echo $result2;
?
