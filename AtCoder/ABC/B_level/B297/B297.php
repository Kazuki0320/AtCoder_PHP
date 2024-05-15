<?php
$S = trim(fgets(STDIN));
$first = strpos($S, "B");
$last = strrpos($S, "B");

if ($first % 2 != $last % 2 && preg_match("/[B].*[B]/", $S) && (preg_match("/R.*K.*R/", $S))) {
    echo "Yes";
} else {
    echo "No";
}

