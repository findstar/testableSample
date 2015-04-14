<?php
namespace Findstar\Tests;

use Findstar\Src\Step4\UserManager;
use Mockery as m;
use PHPUnit_Framework_TestCase;

class UserManager4Test extends PHPUnit_Framework_TestCase {

    public function testGetCurrentUserMock()
    {
        $userRepo = $this->getUserRepoMock();

        $manager = new UserManager( $userRepo );

        $result = $manager->getUser( 1 );

        $expected = [];
        $expected['id'] = 1;
        $expected['name'] = 'findstar';

        $this->assertEquals( $result['id'], $expected['id'], 'User ID 일치함' );
        $this->assertEquals( $result['name'], $expected['name'], 'Username 일치함' );
    }

    protected function getUserRepoMock()
    {
        // Mock expected result
        $result = [];
        $result['id'] = 1;
        $result['name'] = 'findstar';

        // Mock any user repository
        $userRepo = m::mock('Findstar\Src\Step4\UserRepositoryInterface');
        $userRepo->shouldReceive('getUser')->once()->andReturn( $result );

        return $userRepo;
    }

}
