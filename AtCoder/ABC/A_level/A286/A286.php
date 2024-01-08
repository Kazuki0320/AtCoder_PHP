<?php
$QPSR = explode(" ", trim(fgets(STDIN)));
$A = explode(" ", trim(fgets(STDIN)));

$result1 = "";
$result2 = "";

for ($i = $QPSR[1] - 1; $i < $QPSR[2]; $i++) {
    $result1 .= $A[$i] . " ";
}
for ($j = $QPSR[3] - 1; $j < $QPSR[4]; $j++) {
    $result2 .= $A[$j] . " ";
}

$ans1 = explode(" ", trim($result1));
$ans2 = explode(" ", trim($result2));

foreach ($A as $index => $value) {
    if ($QPSR[1] - 1 <= $index && $index <= $QPSR[2] - 1) {
        echo array_shift($ans2) . " ";
    } elseif ($QPSR[3] - 1 <= $index && $index <= $QPSR[4] - 1) {
        echo array_shift($ans1) . " ";
    } else {
        echo $value . " ";
    }
}
?>
