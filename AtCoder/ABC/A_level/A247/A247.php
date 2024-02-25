<?php
$num = str_split(trim(fgets(STDIN)));
$merge = "0";
for($i = 0; $i < 4; $i++) {
	$merge .= $num[$i];
	$merge = substr($merge, 0, 4);
}
echo $merge;
?>
