<?php
fscanf(STDIN, "%s", $S);

for($i = 0; $i < strlen($S); $i++) {
	if('A' <= $S[$i] && $S[$i] <= 'Z') {
		echo($i+1);
	}
}
?>

