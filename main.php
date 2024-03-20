<?php
require_once("./User.php");
require_once("./Client.php");
require_once("./Admin.php");




$user = new User("Adam", "Kowalskii", "kowal1234");
$client = new Client("Tomasz", "Kliencki", "abc123");
$client->setCountry("Poland");
$client->setState("Mazowieckie");
$client->setCity("Warsaw");
$admin = new Admin("Sebastian", "Kuta", "super_user");

echo $user->fullName() . " admin:" . ($user->isAdmin() ? 'true' : 'false') . "\n";
echo $client->fullName() . " admin:" . ($client->isAdmin() ? 'true' : 'false') . " lokalizacja:" . $client->location() . "\n";
echo $admin->fullName() . " admin:" . ($admin->isAdmin() ? 'true' : 'false');
?>