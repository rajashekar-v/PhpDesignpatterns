<?php 
namespace Rajashekar\Designpatterns\Behavioral\ChainOfResponsibilityChatGPT;
use Rajashekar\Designpatterns\Behavioral\ChainOfResponsibilityChatGPT\RequestHandler;
use Rajashekar\Designpatterns\Behavioral\ChainOfResponsibilityChatGPT\Request;

class LoggingHandler implements RequestHandler
{
    private $nextHandler;

    public function setNext(RequestHandler $handler)
    {
        $this->nextHandler = $handler;
        return $handler;
    }
    public function handle(Request $request)
    {
        echo "Logging request.\n";
        if ($this->nextHandler !== null) {
            $this->nextHandler->handle($request);
        }
    }
}



?>