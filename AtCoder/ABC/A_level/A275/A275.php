<?php
fscanf(STDIN, "%d", $N);
$S = explode(" ", trim(fgets(STDIN)));
$result = max($S);
$ans = array_search($S, $result);
echo $ans;
?>
