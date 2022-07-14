<?php

namespace App\Libraries;

class Hash{


    public static function check_password($user_pass,$db_pass)
    {
        
            return $user_pass===$db_pass;
    }

}

?>