<?php
/*
array_reverse関数は、指定した配列の要素を逆順にする。
*/

$a = ['one', 'Two', 'Three','Four','Go'];
echo '● 通常の出力';
echo '<br>';

print_r($a);
echo "<br>";

echo '● 配列を逆順に出力';
echo "<br>";

print_r(array_reverse($a));
echo "<br>";
print_r(array_reverse($a, true));
