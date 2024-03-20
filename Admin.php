<?php
require_once("./User.php");
class Admin extends User
{
    public function __construct(string $name, string $surname, string $username)
    {
        parent::__construct($name, $surname, $username);
        $this->is_admin = true;
    }
}
?>