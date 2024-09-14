<?php 
namespace Rajashekar\Designpatterns\Behavioral\ChainOfResponsibility;

use Rajashekar\Designpatterns\Behavioral\ChainOfResponsibility\Middleware;

class UserExistMiddleware extends Middleware{
    
    private $server;

    public function __construct(Server $server)
    {
        $this->server = $server;
    }

    public function check($email, $password)
    {
        echo "Code in UserExistMiddleware \n";
        if (!$this->server->hasEmail($email)) {
            echo "UserExistsMiddleware: This email is not registered!\n";

            return false;
        }

        if (!$this->server->isValidPassword($email, $password)) {
            echo "UserExistsMiddleware: Wrong password!\n";

            return false;
        }
        
        return parent::check($email, $password);
    }
}






?>