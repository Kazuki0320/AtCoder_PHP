<?php
/*
[考え方]
・２つの入力値を受け取る
・@はa,t,c,o,d,e,rのどれかに置き換わる
・２つの入力値を比べて、同じ文字列を示す場合は勝ち、同じでなければ負け
・負けの処理を考える
[負け]
・１つ目の文字列と同じ文字列の長さか確認
	・違う時点で、負け
・$Sの$i文字目が@かどうか
	・$Sの$i文字目が@で、$Tの$i文字目が@じゃない場合は負け
・$Tの$i文字目が@かどうか
	・$Tの$i文字目が＠で、$Sの$i文字目が@じゃない場合は負け
 */

//[別の処理]
fscanf(STDIN, "%s", $s);
fscanf(STDIN, "%s", $t);
$flg = true;
for ($i = 0; $i < strlen($s); $i++) {
    if ($s[$i] == $t[$i]) continue;
    if ($s[$i] == "@" && (strpos("atcoder", $t[$i]) !== false)) continue;
    if ($t[$i] == "@" && (strpos("atcoder", $s[$i]) !== false)) continue;
    $flg = false;
    break;
}
echo $flg ? "You can win\n" : "You will lose\n";

//[前回の書き方]
fscanf(STDIN, "%s", $S);
fscanf(STDIN, "%s", $T);

for($i = 0; $i < strlen($S); $i++) {
	if($S[$i] === "@") {
		if($T[$i] !== "a" && $T[$i] !== "t" &&
			$T[$i] !== "c" && $T[$i] !== "o" &&
			$T[$i] !== "d" && $T[$i] !== "e" &&
			$T[$i] !== "r" && $T[$i] !== "@") {
				echo "You will lose\n";
				exit;
			}
	}else if($T[$i] === "@") {
		if($S[$i] !== "a" && $S[$i] !== "t" &&
		$S[$i] !== "c" && $S[$i] !== "o" &&
		$S[$i] !== "d" && $S[$i] !== "e" &&
		$S[$i] !== "r" && $S[$i] !== "@") {
			echo "You will lose\n";
			exit;
		}
	} else {
		if($S[$i] !== $T[$i]) {
			echo "You will lose\n";
			exit;
		}
	}
}
echo "You can win\n";