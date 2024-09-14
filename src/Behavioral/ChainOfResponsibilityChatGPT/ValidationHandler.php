<?php 
namespace Rajashekar\Designpatterns\Behavioral\ChainOfResponsibilityChatGPT;
use Rajashekar\Designpatterns\Behavioral\ChainOfResponsibilityChatGPT\RequestHandler;
use Rajashekar\Designpatterns\Behavioral\ChainOfResponsibilityChatGPT\Request;


class ValidationHandler implements RequestHandler
{
    private $nextHandler;

    public function setNext(RequestHandler $handler)
    {
        $this->nextHandler = $handler;
        return $handler;
    }
    public function handle(Request $request)
    {
        if ($request->isValid) {
            echo "Request validated.\n";
            if ($this->nextHandler !== null) {
                $this->nextHandler->handle($request);
            }
        } else {
            echo "Request validation failed.\n";
        }
    }
}



?>