<?php
    $x = str_split(trim(fgets(STDIN)));

    $lastText = end($x);
    if($lastText == "s") echo strval($x) . "es";
    else echo strval($x) . "s";
