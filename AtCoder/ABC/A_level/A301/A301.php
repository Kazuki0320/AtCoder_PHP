<?php
fscanf(STDIN, "%d", $N);
$C = str_split(trim(fgets(STDIN)));

$result_T = 0;
$result_A = 0;
$B = round($N / 2);

for($i = 0; $i < $N; $i++) {
	if($C[$i] == "T") {
		$result_T++;	
	} else {
		$result_A++;
	}
	
	if($B <= $result_T) {
		echo "T";
		break;
  } else if($B <= $result_A) {
		echo "A";
		break;
  }
}
?>
