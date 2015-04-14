<?php

namespace Findstar\Src\Step2;


class UserManager {

    public function getUser($user_id)
    {
        global $dbConn;

        $user_query = "select id, name from user where id='".$user_id."' limit 1";
        $user_result = mysqli_query($dbConn, $user_query);
        $user_data = mysqli_fetch_assoc($user_result);

        return $user_data;

    }

}
