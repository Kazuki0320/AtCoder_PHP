<?php
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
?>