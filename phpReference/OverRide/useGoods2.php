<?php
require_once("OverRide13.php");
require_once("GoodsWithTax.php");

$goods = new GoodsWithTax("リップクリーム", 200);
$goods->printPrice();
