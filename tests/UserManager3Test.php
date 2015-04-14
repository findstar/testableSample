<?php
namespace Findstar\Tests;

use Findstar\Src\Step3\UserManager;
use Mockery as m;
use PHPUnit_Framework_TestCase;

class UserManager3Test extends PHPUnit_Framework_TestCase {

    public function testGetCurrentUserMock()
    {
        $db_connection = $this->getMysqliDbMock();

        $manager = new UserManager( $db_connection );

        $user = $manager->getUser( 1 );

        $expected = [];
        $expected['id'] = 1;
        $expected['name'] = 'findstar';

        $this->assertEquals( $user['id'], $expected['id'], 'User Id 확인' );
        $this->assertEquals( $user['name'], $expected['name'], 'Username 확인 ' );
    }

    protected function getMysqliDbMock()
    {
        $returnData = [];
        $returnData['id'] = 1;
        $returnData['name']= 'findstar';

        // Mock database result object
        $dbConn = m::mock('mysqli');
        $dbConn->shouldReceive('query')->andReturn($dbConn);
        $dbConn->shouldReceive('fetch_assoc')->andReturn($returnData);

        return $dbConn;
    }

}
