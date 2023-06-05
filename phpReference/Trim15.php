<?php
//trim関数を文字列に対して使うと、文字列の先頭および末尾の余白を消してくれる。
echo trim(" apple ");//結果:apple
echo "<br>";
//第二引数を指定すると、指定した文字のみを文字列の先頭と末尾から削除してくれる。
echo trim("dddapple color red ddd", "d");//結果:apple color red
echo "<br>";
//複数の文字を対象に削除する場合、文字を文字列にして複数削除してくれる。※ただし、
$hello = "Hello World";
echo trim($hello, "Hed");//結果:llo Worl