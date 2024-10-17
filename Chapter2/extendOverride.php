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
    var $city;
    var $country;

    function location()
    {
        return $this->city . ' ' . $this->country;
    }

    function fullName()
    {
        return $this->firsName . ' ' . $this->lastName . ' (customer)';
    }

}

$u = new User;
$u->firsName = "Hasan";
$u->lastName = "Najib";
// $u->city = "Solo";
// $u->country = "Indonesia";

echo $u->fullName() . "<br/>";
// echo $u->location() . "<br/>";

$c = new Customer;
$c->firsName = "Customer";
$c->lastName = "Hans";
$c->city = "Solo";
$c->country = "Indonesia";

echo $c->fullName() . "<br/>";
echo $c->location() . "<br/>";

if (is_subclass_of($c, 'User')) {
    echo " Instance Customer merupakan subclass Class User <br/>";
}

$parents = class_parents($c);
echo implode('$c adalah class milik ',  $parents);
?>