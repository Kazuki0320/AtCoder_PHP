<?php
fscanf(STDIN, "%d", $N);

$inte = [];
for($i = 0; $i < $N; $i++) {
    $str = explode(" ", trim(fgets(STDIN)));
    $inte[] = $str[0];
}
$result = array_reverse($inte);
foreach ($result as $value) {
    echo $value.PHP_EOL;
}
?>
