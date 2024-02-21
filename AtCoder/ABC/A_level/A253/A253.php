<?php
	$A = explode(" ", trim(fgets(STDIN)));
	$B = $A;
    sort($A);
    
    if($A[1] === $B[1]) {
      echo "Yes";
      exit;
    }
    echo "No";
?>
