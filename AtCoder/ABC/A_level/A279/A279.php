<?php
$S = trim(fgets(STDIN));
$result = 0;
for($i = 0; $i < strlen($S); $i++) {
	if($S[$i] === 'v') {
		$result++; 
	} else {
		$result = $result + 2;;
	}
}
echo $result;
?>
