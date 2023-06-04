<?php
$m = trim(fgets(STDIN));
if($m < 100)
	$result = "00";
else if($m <= 5000) {
	$y = ($m / 1000) * 10;
	if($y < 10)
		$result = "0".$y;
	else
		$result = $y;
}
else if($m <= 30000)
	$result = ($m / 1000) + 50;
else if($m <= 70000)
	$result = ((($m / 1000 - 30) / 5) + 80); 
else
	$result = '89';
$result1 = $result;
echo $result1."\n";
