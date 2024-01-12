<?php
fscanf(STDIN, "%d %d", $N, $R);
$number1 = explode(" ", trim(fgets(STDIN)));
sort($number1);
$newNumber = 0;
for($i = 1; $i < $N-2; $i++) {
    $newNumber += (int)$number1[$i];
}
$result = $R - $newNumber;

if($result < 100) {
    echo $result;
} else if($result == 100){
    echo 0;
} else {
    echo -1;
}
?>
