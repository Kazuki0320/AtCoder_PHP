<?php
/*
・入力値を受け取る
・改行で、２行目になるので、そこで分割
・@をa,t,c,o,d,e,rに置換
・一致した場合は"You can will"と表示して、不一致の場合は”You will lose”と表示する。
	・受け取ってきた文字列に@がない場合かつ文字列が一致していない場合○
 */

fscanf(STDIN,"%s",$s);
fscanf(STDIN,"%s",$t);

for($i=0;$i<strlen($s);$i++){

	if($s[$i]=="@"){
		if($t[$i]!="a" && $t[$i]!="t" &&
			$t[$i]!="c" && $t[$i]!="o" &&
			$t[$i]!="d" && $t[$i]!="e" &&
			$t[$i]!="r" && $t[$i] !="@"){
				echo "You will lose\n";
				exit;
			}
		}elseif($t[$i]=="@"){
		if($s[$i]!="a" && $s[$i]!="t" &&
			$s[$i]!="c" && $s[$i]!="o" &&
			$s[$i]!="d" && $s[$i]!="e" &&
			$s[$i]!="r"&& $s[$i]!="@"){
				echo "You will lose\n";
				exit;
			}
		}else{
		if($s[$i]!=$t[$i]){
			echo "You will lose\n";
			exit;
		}
	}
}
echo "You can win\n";