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
        
        if (!$this->server->hasEmail($email)) {
            echo "This email is not registered!\n";

            return false;
        }

        if (!$this->server->isValidPassword($email, $password)) {
            echo "Wrong password!\n";

            return false;
        }
        
        return parent::check($email, $password);
    }
}






?>