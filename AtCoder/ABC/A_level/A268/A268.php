<?php
	$list = explode(" ", trim(fgets(STDIN)));
	$value_count = array_count_values($list);
	$result = 0;
	foreach ($value_count as $value) {
	    if($value === 2) {
	        $result += 1;
	    } else {
	        $result += 1;
	    }
	}
	echo $result;
?>

