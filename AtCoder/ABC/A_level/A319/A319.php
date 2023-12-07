<?php
	fscanf(STDIN, "%s", $s);

	$players = [
		'tourist' => 3858,
		'ksun48' => 3679,
		'Benq' => 3658,
		'Um_nik' => 3648,
		'apiad' => 3638,
		'Stonefeang' => 3630,
		'ecnerwala' => 3613,
		'mnbvmar' => 3555,
		'newbiedmy' => 3516,
		'semiexp' => 3481
	];

	if(array_key_exists($s, $players)) {
		$rating  = $players[$s];
		echo $rating;
	};
?>
