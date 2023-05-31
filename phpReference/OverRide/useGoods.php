<?php
require_once("OverRide13.php");
require_once("GoodsWithTax.php");

$goods = new Goods("ハンドクリーム", 350);
$goods->printPrice();

$goodsWithTax = new GoodsWithTax("日焼け止め", 500);
$goodsWithTax->printPrice();