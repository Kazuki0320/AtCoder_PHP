<?php
	//エラーハンドリングについて
	//エラーが発生しそうな箇所で、エラーハンドリングをすることで、自分なりの処理や設定を行い、
	//メッセージ表示させたり何かしらの対策をする。
	function division($int1, $int2) {
		try {
			if($int2 === 0) {
				throw new Exception('0で割れません');
			}
			return $int1/$int2;
		} catch(Exception $e) {
			echo "例外処理が発生しました";
			echo "<br>";
			echo $e->getMessage();
		}
	}

	echo division(10, 0);
?>