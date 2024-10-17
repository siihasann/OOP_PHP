<?php 
class User
{
    var $firsName;
    var $lastName;
    var $userName;

    function fullName()
    {
        return $this->firsName . ' ' . $this->lastName;
    }
}

class Customer extends User 
{

}

$c = new Customer;
$c->firsName = "Customer";
$c->lastName = "Hans";

echo $c->fullName() . "<br/>";

if (is_subclass_of($c, 'User')) {
    echo " Instance Customer merupakan subclass Class User <br/>";
}

$parents = class_parents($c);
echo implode('$c adalah class milik ',  $parents);
?>