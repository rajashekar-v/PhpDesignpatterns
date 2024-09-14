<?php 
namespace Rajashekar\Designpatterns\Behavioral\ChainOfResponsibility;

use Rajashekar\Designpatterns\Behavioral\ChainOfResponsibility\Middleware;

class Server {
    private $users = [];

    private $middleware;
    
    public function setMiddleware(Middleware $middleware)
    {
        $this->middleware = $middleware;
    }

    public function logIn($email,$password)
    {
        if ($this->middleware->check($email, $password)) {
            echo "Server: Authorization has been successful!\n";

            // Do something useful for authorized users.

            return true;
        }

        return false;
    }

    public function register($email, $password)
    {
        $this->users[$email] = $password;
    }

    public function hasEmail($email)
    {
        return isset($this->users[$email]);
    }

    public function isValidPassword($email, $password)
    {
        return $this->users[$email] === $password;
    }
}






?>