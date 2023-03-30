<?php
	$date = sprintf('%04d.%02d.%02d', 2021, 8, 3);
	//sprintf('%d, 'abc')の場合は、０が出力される。（%dは整数を出力するため）
	//sprintf('%s, 'abc')の場合は、文字列が出力される。（%sは文字列を出力するため）
	echo $date;
?>