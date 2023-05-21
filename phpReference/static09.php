<?php
	//staticプロパティの設定例
	//[クラスを直接呼び出した場合]
	
	class testClass	{
		public $test = "テスト";
		public static $staticTest = 'staticなテスト';
	}

	//クラス外からの呼び出し
	echo testClass::$staticTest;//staticなテスト
	echo testClass::$test;//error,インスタンスを生成していないので、存在しない

	//[インスタンスを生成して呼び出した場合]
	class testClass1 {
		public $test1 = "テスト1";
		public static $staticTest = "staticなテスト1";
	}

	//クラス外でインスタンスを生成
	$testInstance = new testClass1;
	echo $testInstance->test1;//テスト1

	echo $testInstance->staticTest;//インスタンスの中には、staticTestは存在しない

?>