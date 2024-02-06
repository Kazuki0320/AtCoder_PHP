<?php
	list($A, $B, $C) = explode(" ", trim(fgets(STDIN)));
	$A_apple = 1;
	$B_apple = 3;
	$B_count_result = floor($C / $B_apple);
	$B_result = $B * $B_count_result;
	$A_count_result = $C - floor($B_apple * $B_count_result);
	$A_result = $A * $A_count_result;
	
	$all1_result = $A_result + $B_result;
	$all2_result = $A * $C;
	$ans = min($all1_result, $all2_result);
	echo $ans;
?>

