<?php

namespace Findstar\Src\Step1;

class UserManager {

    public function getCurrentUser()
    {
        global $dbConn;

        $user_id = $_SESSION['user_id'];

        $user_query = "select id, name from user where id='".$user_id."' limit 1";
        $user_result = mysqli_query($dbConn, $user_query);
        $user_data = mysqli_fetch_assoc($user_result);

        return $user_data;

    }

}
