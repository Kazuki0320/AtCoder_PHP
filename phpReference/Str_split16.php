<?php
//str_split()とは、指定した文字列を分割し、配列に変換する関数となる。
//例えば、「abcdef」という文字列に対してstr_split()使用すると
//「[a,b,c,d,e,f]」のように、指定した文字列を配列として返すようになる。
/*
[書き方]
<?php str_split('配列にする文字列' [, '分割する部分の長さ']); ?>
*/
echo '● 対象の文字列';
echo "<br>";
$text = 'split';
echo $text;
echo "<br>";

echo '● str_split使用後';
echo "<br>";
$text1_spt = str_split($text);
var_dump($text1_spt);
echo "<br>";

//分割する文字数を指定できる
echo '● str_split使用後';
echo "<br>";
$text2_spt = str_split($text, 2);
var_dump($text2_spt);