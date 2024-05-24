<?php
/*
 *- Nという値が与えられるので、5Nが審査員の人数
- 一番点数が高い人N人目までを、除外
- 一番点数が低い人N人目までを、除外
- 残った、人数3Nの人たちの値を合計した数を3Nで割った時の数を求める
- 絶対誤差または相対誤差が10−5以下であれば正解
* */

$N = intval(trim(fgets(STDIN)));

$judge = explode(" ", trim(fgets(STDIN)));

sort($judge, SORT_NUMERIC);

for ($i = 0; $i < $N; $i++) {
	array_shift($judge);
	array_pop($judge);
}

$count = array_sum($judge) / (3 * $N);
echo $count;
