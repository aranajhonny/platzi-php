<?php
require_once 'vendor/autoload.php';

$user = new \PlatziPHP\Author('jhonny@gmail.com', '1234');

$user->setName('jhonny', 'arana');

echo $user->getLastName();
echo PHP_EOL;
echo $user->getFirstName();
echo PHP_EOL;
//var_dump($user);