<?php

[$H,$W] = array_map('intval',explode(" ", trim(fgets(STDIN))));
[$R,$C] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$result = 0;
if ($C !== 1) $result++;
if ($C !== $W) $result++;
if ($R !== 1) $result++;
if ($R !== $H) $result++;
echo $result . PHP_EOL;

