<?php

namespace Rajashekar\Designpatterns\Behavioral\PractiseCOR;

class Server
{
    private $users;

    private $middleware;

    public function set_middleware(Middleware $middleware)
    {
        $this->middleware = $middleware;
    }

    public function login($email, $password)
    {
        if($this->middleware->check($email, $password))
        {
            echo "Server: Authorization has been successful!\n";

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