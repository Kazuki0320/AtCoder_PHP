<?php
	//[file_get_contentsを使ったファイルの読み込み]
	$news = file_get_contents('news.txt');
	echo $news;

	//[readfileを使ったファイルの読み込み]
	//下記は、変数などに代入しなくても画面に表示ができる。
	// readfile('news.txt');

	//[ファイルの追記]
	/*
	1.ファイルの内容全体を読み込む
	2.それに対して、内容加工
	3.file_put_contentsで書き込む
	 */
	$news = $news. "<br>追加のニュースです";
	$success = file_put_contents('news.txt', $news);
?>