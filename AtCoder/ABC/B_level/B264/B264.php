<?php

fscanf(STDIN, "%d %d", $r, $c);

function result($r, $c) {
    if (($r === 1 || $r === 15) || ($c === 1 || $c === 15)) {
        return "black";
    }

    if (($r === 2 || $r === 14) || ($c === 2 || $c === 14)) {
        return "white";
    }

    if (($r === 3 || $r === 13) || ($c === 3 || $c === 13)) {
        return "black";
    }

    if (($r === 4 || $r === 12) || ($c === 4 || $c === 12)) {
        return "white";
    }

    if (($r === 5 || $r === 11) || ($c === 5 || $c === 11)) {
        return "black";
    }

    if (($r === 6 || $r === 10) || ($c === 6 || $c === 10)) {
        return "white";
    }

    if (($r === 7 || $r === 9) || ($c === 7 || $c === 9)) {
        return "black";
    }

    if ($r === 8 || $c === 8) {
        return "white";
    }
}

echo result($r, $c) . PHP_EOL;
?>

