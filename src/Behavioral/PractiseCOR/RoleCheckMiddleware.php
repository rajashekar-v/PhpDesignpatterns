<?php

namespace Rajashekar\Designpatterns\Behavioral\PractiseCOR;

use Rajashekar\Designpatterns\Behavioral\PractiseCOR\Middleware;


class RoleCheckMiddleware extends Middleware{

    public function check($email , $password)
    {
        if ($email === "admin@example.com") {
            echo "RoleCheckMiddleware: Hello, admin!\n";

            return true;
        }
        
        echo "RoleCheckMiddleware: Hello, user!\n";

        return parent::check($email, $password);
    }
}