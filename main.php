<?php
class User
{
    public $name;
    public $surname;
    public $username;
    protected $is_admin = false;

    public function __construct($name, $surname, $username)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->username = $username;
    }

    public function isAdmin()
    {
        return $this->is_admin;
    }

    public function fullName()
    {
        if ($this->is_admin)
            return $this->name . ' ' . $this->surname . ' (admin)';
        return $this->name . ' ' . $this->surname;
    }



}

class Client extends User
{
    private $city;
    private $state;
    private $country;
    public function __construct($name, $surname, $username)
    {
        parent::__construct($name, $surname, $username);
    }
    public function setCity($city)
    {
        $this->city = $city;
    }
    public function setState($state)
    {
        $this->state = $state;
    }
    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function getCity()
    {
        return $this->city;
    }
    public function getState()
    {
        return $this->state;
    }
    public function getCountry()
    {
        return $this->country;
    }
    public function location()
    {
      
        return "$this->city, $this->state, $this->country";

    }
}

class Admin extends User
{
    public function __construct($name, $surname, $username)
    {
        parent::__construct($name, $surname, $username);
        $this->is_admin = true;
    }
}


$user = new User("Adam", "Kowalski", "kowal123");
$client = new Client("Tomasz", "Kliencki", "abc123");
$client->setCountry("Poland");
$client->setState("Mazowieckie");
$client->setCity("Warsaw");
$admin = new Admin("Sebastian", "Kuta", "super_user");

echo $user->fullName() ." admin:" . ((string)$user->isAdmin() ? 'true' : 'false') . "\n";
echo $client->fullName() . " admin:" . ((string)$client->isAdmin() ? 'true' : 'false'). " lokalizacja:" . $client->location() ."\n";
echo $admin->fullName() . " admin:" . ((string)$admin->isAdmin() ? 'true' : 'false');


?>

