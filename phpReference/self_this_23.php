<?php
//$thisは、自分自身のオブジェクトを指し、インスタンス化した際、クラス内のメンバ変数やメソッドにアクセスする際に使用が可能
class Cars {
	public $cars = 'Toyota';

    function carTest() {
		echo $this->cars;
	}
}
	
$objCar = new Cars;
$objCar->carTest();

//self変数は自身のクラスを指し、クラス定数、スタティック変数については、インスタンス化せずに使用することができる。

// class Cars {
// 	public static $cars  = 'Toyota';
// 	public static function carTest() {
// 		echo self::$cars;
// 	}
// }

// Cars::carTest();
?>
