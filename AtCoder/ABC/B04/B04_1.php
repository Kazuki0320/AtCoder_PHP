<?php
/*
[考え方]
・受け取ってきた入力値を逆順から出力する
*/
$A=explode(" ",trim(fgets(STDIN)));
$B=explode(" ",trim(fgets(STDIN)));
$C=explode(" ",trim(fgets(STDIN)));
$D=explode(" ",trim(fgets(STDIN)));
$E=[$A,$B,$C,$D];

for($i = 3; $i >= 0; $i--) {
	for($j = 3; $j >= 0; $j--) {
		echo $E [$i][$j];
		echo " ";
	}
	echo "\n";
}

