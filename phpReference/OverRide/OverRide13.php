<?php
//オーバーライド
class Goods {
	//商品名プロパティ
	private $name = "";
	private $price = 0;

	//コンストラクタ。商品名と商品価格を設定する。
	public function __construct(string $name, int $price)
	{
		$this->name = $name;
		$this->price = $price;
	}

	//商品名と価格を表示するメソッド
	public function printPrice(): void
	{
		print($this->name."の価格: ¥". $this->price. "<br>");
	}

	//商品名のゲッタ
	public function getName(): string
	{
		return $this->name;
	}

	//商品価格のゲッタ
	public function getPrice(): int
	{
		return $this->price;
	}
}
?>