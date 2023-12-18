<?php
	fscanf(STDIN, "%d", $n);
	$people = trim(fgets(STDIN));

	$list = [];
	while($arr = trim(fgets(STDIN))){
  $arr = explode(' ', $arr);
  $list[] = $arr;
}
	var_dump($list);
?>