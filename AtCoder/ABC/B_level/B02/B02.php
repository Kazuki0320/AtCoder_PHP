<?php
//他の方の解き方
fscanf(STDIN, "%s", $w);
echo str_replace(["a", "i", "u", "e", "o"], "", $w), "\n";

//自分の解き方
$w = str_split(trim(fgets(STDIN)));

foreach($w as $value){
	if($value != "a" && $value != "i" && $value != "u" && $value != "e" && $value != "o") {
		echo $value;
	}
}

echo "\n";
