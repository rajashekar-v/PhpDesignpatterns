<?php

namespace   Rajashekar\Designpatterns\Behavioral\PractiseCOR;

use Rajashekar\Designpatterns\Behavioral\PractiseCOR\Middleware;

class UserExistMiddleware extends Middleware
{
    private $server;

    public function __construct(Server $server)
    {
        $this->server = $server;
    }

    public function check($email, $password)
    {
        if(!$this->server->hasEmail($email))
        {
            echo "\n No Email is registered with this address\n";
            return false;
        }

        if(!$this->server->isValidPassword($email, $password))
        {
            echo "\n You have entered wrong credentials please try again\n";
            return false;
        }

        return parent::check($email, $password);
    }
}