<?php

use Findstar\Src\Step4\DBUserRepository;
use Findstar\Src\Step4\UserManager;

session_start();

$_SESSION['user_id'] = 1;

require __DIR__.'/vendor/autoload.php';


$dbConn = new mysqli('192.168.0.60', 'homestead', 'secret', 'testable', 33060);

$userRepository = new DBUserRepository($dbConn);
$userManager = new UserManager($userRepository);

$user_id =$_SESSION['user_id'];

$currentUser = $userManager->getUser($user_id);

var_dump($currentUser);

