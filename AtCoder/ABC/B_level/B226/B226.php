<?php
fscanf(STDIN,"%d",$N);
for($i=0;$i<$N;++$i) $a[] = array_map('intval',explode(" ", trim(fgets(STDIN))));
sort($a);

$ans = 1;
for($i=1;$i<$N;++$i) if($a[$i]!=$a[$i-1]) ++$ans;

echo $ans . PHP_EOL;

?>
