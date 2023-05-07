<?php
//DIをしていない場合
//コンストラクタは、呼び出された時に自動でインスタンスを生成。
class User
{

    protected $phone;

    public function __construct()
    {
        $this->phone = new Phone();
    }

    public function UserCallPhone()
    {
        echo $this->phone->call();
    }
}

class Phone
{
    public function call()
    {
        return "プルプル...";
    }
}
$user = new User();
$user->UserCallPhone();
echo '<br>';

//DIをした場合
class User1 {
    protected $phone1;

    public function __construct(Phone1 $phone1) {
        $this->phone1 = $phone1;
    }

    public function UserCallPhone1() {
        echo $this->phone1->call();
    }
}

class Phone1 {
    public function call() {
        return "プルプルプル...";
    }
}
$phone1 = new Phone1();
$user1 = new User1($phone1);
$user1->UserCallPhone1();

?>