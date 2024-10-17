<?php 
class User
{
    public $firsName;
    public $lastName;
    public $userName;

    protected $regId = 1001;
    private $role = 'user';

    public function fullName()
    {
        return $this->firsName . ' ' . $this->lastName;
    }

    protected function sayProtect()
    {
        return "Hello, Protected";
    }

    private function sayPrivate()
    {
        return "Hello, Private";
    }

    public function sayMe()
    {
        return $this->sayPrivate();
    }

}

class Customer extends User 
{
    public function sayParent()
    {
        return $this->sayProtect();
    }

}

$u = new User;
$u->firsName = "User";
$u->lastName = "Class";

// echo $u->regId . '<br/>';
// echo $u->role . '<br/>';


echo $u->fullName() . '<br/>';
echo $u->sayMe() . '<br/>';
// echo $u->sayProtect() . '<br/>';
// echo $u->sayPrivate() . '<br/>';

$c = new Customer;
$c->firsName = "Customer";
$c->lastName = "Hans";

echo $c->fullName() . "<br/>";
echo $c->sayParent() . "<br/>";