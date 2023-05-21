<?php
	//EXception使い方
	//変数$nの値が10の時は例外を発生させず、0の時に例外発生としExceptionを表示させる処理。

	function func($n) {
		echo "func start.<br>";
		try {
			//$nが0だったら例外を投げる
			if($n === 0) {
				throw new Exception();
			}

			//$nの値を表示
			echo "n=".$n;
			echo '<br>';
		}catch(Exception $n) {
			echo "catch Exception.<br>";
		}
		echo 'func end.<br>';
	}

	func(10);//引数10でfunc関数を実行
	echo '<br>';
	func(0);//引数0でfunc関数を実行

	//getMessageを使う場合
	function func1($arg) {
		try {
			if($arg === 0) {
				throw new EXception('exception!');
			}
		}catch(Exception $arg) {
			//getMessageで例外メッセージを取得
			echo $arg->getMessage();
		}
	}

	func1(0);

?>