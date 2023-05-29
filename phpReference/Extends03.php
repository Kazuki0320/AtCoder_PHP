<?php
//継承について
//継承を利用しないパターン
// 新車クラス
class NewCar{
	const MANUFACTURER = "○○自動車";
	public function printCar($price) {
		print("製造元は".self::MANUFACTURER."<br />");
		print("販売価格は$price 円<br />");
	}
	public function printNewCar($price) {
	print("新車です<br />");
	$this->printCar($price);
	}
}
// 中古クラス
class OldCar{
	const MANUFACTURER = "○○自動車";
	public function printCar($price) {
		print("製造元は".self::MANUFACTURER."<br />");
		print("販売価格は$price 円<br />");
	}
	public function printOldCar($price) {
	print("中古車です<br />");
	$this->printCar($price);
	}
}
$newCar = new NewCar();
$oldCar = new OldCar();

echo $newCar->printNewCar(1000);
echo $oldCar->printOldCar(100);

//継承を利用するパターン
// 車の基本クラス
class BaseCar{
	const MANUFACTURER = "○○自動車";
	public function printCar($price) {
		print("製造元は".self::MANUFACTURER."<br />");
		print("販売価格は$price 円<br />");
	}
}
// 新車クラス
//車の基本クラスを継承している
class NewCar1 extends BaseCar{
	public function printNewCar($price) {
		print("新車です<br />");
		$this->printCar($price);
	}
}
// 中古クラス
//車の基本クラスを継承している
class OldCar1 extends BaseCar{
	public function printOldCar($price) {
		print("中古車です<br />");
		$this->printCar($price);
	}
}

//継承を利用した後にオーバーライドするパターン
class NewCar2 extends BaseCar {
	public function printCar($price) {
		print("新車です<br />");
		$this->printCar($price);
	}
}

class OldCar2 extends BaseCar {
	public function printCar($price) {
		print("中古車です<br />");
		$this->printCar($price);
	}
}

$newCar1 = new NewCar1();
$oldCar1 = new OldCar1();

$newCar2 = new NewCar2();
$oldCar2 = new OldCar2();

echo $newCar1->printNewCar(2000);
echo $oldCar1->printOldCar(200);

echo $newCar2->printCar(4000);
echo $oldCar2->printCar(200);

?>