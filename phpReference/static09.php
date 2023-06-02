<?php
	//staticプロパティの設定例
	//[クラスを直接呼び出した場合]
	
	// class testClass	{
	// 	public $test = "テスト";
	// 	public static $staticTest = 'staticなテスト';
	// }

	// //クラス外からの呼び出し
	// echo testClass::$staticTest;//staticなテスト,スコープ定義演算子（::）
	// echo testClass::$test;//error,インスタンスを生成していないので、存在しない

	// //[インスタンスを生成して呼び出した場合]
	// class testClass1 {
	// 	public $test1 = "テスト1";
	// 	public static $staticTest = "staticなテスト1";
	// }

	// //クラス外でインスタンスを生成
	// $testInstance = new testClass1;
	// echo $testInstance->test1;//テスト1
	// echo $testInstance->staticTest;//インスタンスの中には、staticTestは存在しない

	//[staticプロパティが、共通化してることを確認するメソッド]
	/**
	 * staticがついてないメソッドなどは、クラスのオブジェクトをインスタンス化した段階で作られる。→クラスのオブジェクト毎に管理されている変数。
	 * staticプロパティなどは、最初に呼び出されたタイミングで、作られる。→そのため、クラスのインスタンスに関係なく、共通化している。
	 */
	class NumPrint {
		//プロパティ
		public $num = 0;
		//staticプロパティ
		public static $staticNum = 0;
		public function addNum() {
			//プロパティを加算
			$this->num++;
			//staticプロパティを加算
			self::$staticNum++;
		}
	}

	$numPrint = new NumPrint();
	$numPrint->addNum();

	print "プロパティの値".$numPrint->num;//表示結果:1
	print ",staticプロパティの値".NumPrint::$staticNum;//表示結果:1
	
	$numPrint1 = new NumPrint();
	$numPrint1->addNum();

	print "<br>プロパティの値".$numPrint->num;//クラスのオブジェクト毎に管理しているため、1が表示される
	print ",staticプロパティの値".NumPrint::$staticNum;//staticプロパティは共通化してるため、加算されて2と表示される

	/**
	 * 静的メソッドと動的メソッドにおけるselfとthisの違い
	 */
	//[静的メソッドからプロパティへアクセスする場合]
	//thisは、クラスのインスタンス化をしていないと使えない。自身のクラスのインスタンス化したオブジェクトを指しているため。
	// class tesClass {
	// 	private $strVar;
	// 	private static $staticVar;

	// 	public static function staticName($var) {
	// 		$this->strVar = $var;
	// 		echo $this->strVar;
	// 	}
	// }

	// testClass::staticName("スタティック");//出力結果:エラー

	//thisは使えないが、selfだとクラスを指すため使える。
	class testClass1 {
		private $strVar;
		private static $staticVar;

		public static function staticName($var) {
			self::$staticVar = $var;
			echo self::$staticVar;
		}
	}

	testClass1::staticName("スタティック");//出力結果:スタティック

	//[動的メソッドからプロパティへアクセスする場合]
	class testClass2 {
		private $instVar;
		private static $staticVar;

		public function instMethod($val) {
			$this->instVar = $val;
			echo $this->instVar;

			echo "\n";

			self::$staticVar = $val;
			echo self::$staticVar;
		}
	}

	$obj = new testClass2;
	$obj->instMethod("インスタンス");//出力結果:スタティック スタティック
?>