<?php 
namespace Rajashekar\Designpatterns\Behavioral\ChainOfResponsibility;

use Rajashekar\Designpatterns\Behavioral\ChainOfResponsibility\Middleware;

class RoleCheckMiddleware extends Middleware{

    public function check($email,$password)
    {
        echo "Code in RoleCheckMiddleware \n";
        if ($email === "admin@example.com") {
            echo "RoleCheckMiddleware: Hello, admin!\n";

            return true;
        }
        echo "RoleCheckMiddleware: Hello, user!\n";

        return parent::check($email, $password);
    }
}

?>