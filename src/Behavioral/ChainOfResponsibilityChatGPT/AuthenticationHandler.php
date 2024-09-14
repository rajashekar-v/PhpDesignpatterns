<?php 

namespace Rajashekar\Designpatterns\Behavioral\ChainOfResponsibilityChatGPT;

use Rajashekar\Designpatterns\Behavioral\ChainOfResponsibilityChatGPT\RequestHandler;
use Rajashekar\Designpatterns\Behavioral\ChainOfResponsibilityChatGPT\Request;

class AuthenticationHandler implements RequestHandler
{
    private $nextHandler;

    public function setNext(RequestHandler $handler)
    {
        $this->nextHandler = $handler;
        return $this->nextHandler;
    }
    public function handle(Request $request)
    {
        if ($request->isAuthenticated) {
            echo "Authentication successful.\n";
            if ($this->nextHandler !== null) {
                $this->nextHandler->handle($request);
            }
        } else {
            echo "Authentication failed.\n";
        }
    }
}



?>