<?php

use Findstar\Src\Step3\UserManager;

session_start();

$_SESSION['user_id'] = 1;

require __DIR__.'/vendor/autoload.php';


$dbConn = new mysqli('192.168.0.60', 'homestead', 'secret', 'testable', 33060);


$userManager = new UserManager($dbConn);

$user_id =$_SESSION['user_id'];

$currentUser = $userManager->getUser($user_id);

var_dump($currentUser);

