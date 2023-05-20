<?php
	//配列内の全ての値が一意かチェックする
	/*
	重複判定のために書いたのは、配列内の全ての要素が一意であるか調べる関数。
	つまり
	* 返り値がtrueなら配列内に重複要素はない
	* 返り値がfalseなら配列内に重複要素あり
	となる。 */
	function isUniqueArray($targetArray) {
		$uniqueArray = array_unique($targetArray);
		if(count($uniqueArray) === count($targetArray)) {
			return true;
		} else {
			return false;
		}
	}

	$fruitsArray = ['apple', 'banana', 'lemon', 'banana'];
	var_dump(isUniqueArray($fruitsArray));
?>