<?php
	//classを使ったやり方
	class Student {
		public $name = "tanaka";
		public $age = 21;
	
		function studentInfo(){
			echo $this->name.'<br>'.$this->age;
		}
	}

	$student = new Student();

	// $student->name = "kazuki";
	// $student->age = 27;

	echo $student->name;
	echo '<br>';
	echo $student->age;
	echo '<br>';
	$student->studentInfo();
	echo '<br>';


	//staticを使ったやり方
	class Student1 {

		//静的変数を作成する
			public static $name = "kazuki";
		}
	
		//静的変数を参照する
		$studentName = Student1::$name;
		echo $studentName;
?>