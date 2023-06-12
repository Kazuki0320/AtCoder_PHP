<?php
//explode関数
//対象の文字列を指定した文字列で分割するための関数

//文字列を分割
$arrayDayList = explode("/", "2019/01/31");

//結果を出力
print_r($arrayDayList);

echo "<br>";
//文字列を分割
$arrayList = explode("/", "A/B/C/D/E", 2);

//結果を出力
print_r($arrayList);