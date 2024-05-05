<?php

function strings() { return explode(' ', trim(fgets(STDIN))); }
function ints() { return array_map('intval', strings()); }
function doubles() { return array_map('doubleval', strings()); }
function output(...$args) { echo implode(' ', $args), "\n"; }

function main() {
	// 標準入力
	list($n) = ints();
	for ($i=0;$i<$n;++$i) {
		list($a[]) = strings();
	}

	// メイン
	$ans = [];
	for ($i=0;$i<$n;++$i) {
		for ($j=0;$j<$n;++$j) {
			if ($i === 0 || $i === $n-1 || $j === 0 || $j === $n-1) {
				if ($i === 0 && $j < $n-1) $ans[$i][$j+1] = $a[$i][$j]; // 上側
				if ($i < $n-1 && $j === $n-1) $ans[$i+1][$j] = $a[$i][$j]; // 右側
				if ($i === $n-1 && $j > 0) $ans[$i][$j-1] = $a[$i][$j]; // 下側
				if ($i > 0 && $j === 0) $ans[$i-1][$j] = $a[$i][$j]; // 右側
			} else {
				$ans[$i][$j] = $a[$i][$j];
			}
		}
	}

	// 出力
	for ($i=0;$i<$n;++$i) {
		for ($j=0;$j<$n;++$j) {
			echo $ans[$i][$j];
		}
		echo PHP_EOL;
	}
}

main();

