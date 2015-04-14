<?php

require __DIR__.'/vendor/autoload.php';

global $dbConn;
$dbConn = new \mysqli('192.168.0.60', 'homestead', 'secret', 'testable', 33060);

session_start();

$_SESSION['user_id'] = 1;

$userManager = new \Findstar\Src\Step1\UserManager();


$currentUser = $userManager->getCurrentUser();

var_dump($currentUser);



