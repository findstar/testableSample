<?php

namespace Findstar\Src\Step4;

use mysqli;

class DBUserRepository implements UserRepositoryInterface {

    protected $dbConn;

    public function __construct(mysqli $dbConn)
    {
        $this->dbConn = $dbConn;
    }

    public function getUser($user_id)
    {
        $user_query = "select id, name from user where id='".$user_id."' limit 1";
        $user_result = $this->dbConn->query($user_query);

        $user_data = $user_result->fetch_assoc();

        return $user_data;
    }
}
