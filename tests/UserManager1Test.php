<?php
namespace Findstar\Tests;

use Findstar\Src\Step1\UserManager;
use PHPUnit_Framework_TestCase;


class UserManager1Test extends PHPUnit_Framework_TestCase {

    public function testGetUser()
    {
        global $dbConn;
        $dbConn = new \mysqli('192.168.0.60', 'homestead', 'secret', 'testable', 33060);
        $_SESSION['user_id'] = 1;

        $userManager = new UserManager();
        $currentUser = $userManager->getCurrentUser();
        $this->assertEquals(1, $currentUser['id']);
    }

}
