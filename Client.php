
<?php
require_once("./User.php");
class Client extends User
{
    private string $city = '';
    private string $state = '';
    private string $country = '';

    public function __construct(string $name, string $surname, string $username)
    {
        parent::__construct($name, $surname, $username);
    }

    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    public function setState(string $state): void
    {
        $this->state = $state;
    }

    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function location(): string
    {
        return "$this->city, $this->state, $this->country";
    }
}
?>