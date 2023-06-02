<?php
	//親クラスのメソッドを呼び出すことができるメソッドparent
	class A {
		public function __construct() { 
			echo "A\n";
		}

		public function func() {
			echo "B\n";
		}
	}

	class B extends A {
		public function __construct() {
			//親クラスのコンストラクトを呼び出す
			parent::__construct();
			echo "B\n";
		}

		public function func() {
			//親クラスのfunc()を呼び出す
			parent::func();
			echo "B\n";
		}
	}

	$b = new B();
	$b->func();//出力結果:A B B B
?>