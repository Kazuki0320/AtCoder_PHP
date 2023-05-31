<?php
/**
 * Goodsを継承してきて、GoodsWithTaxクラスのprintPriceメソッド内で、商品価格の税込と価格を計算する。
 * これをオーバーライドいう。
 */
class GoodsWithTax extends Goods
{
	//商品名と価格を表示するメソッド。税込で表示するように変更
	public function printPrice(): void
	{
		//親クラスの同名メソッドの呼び出し
		//parentにより、親クラスのメソッドを呼び出せる。コンストラクタも呼び出せる。parent::__construct();
		parent::printPrice();
		//商品価格の税込と価格を計算し、表示
		$priceWithTax = round($this->getPrice() * 1.10);
		print($this->getName()."の税込み価格: ¥".$priceWithTax."<br>");
	}
}