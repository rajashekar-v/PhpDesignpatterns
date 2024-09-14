<?php 
namespace Rajashekar\Designpatterns\Behavioral\ChainOfResponsibilityChatGPT;
use Rajashekar\Designpatterns\Behavioral\ChainOfResponsibilityChatGPT\RequestHandler;
use Rajashekar\Designpatterns\Behavioral\ChainOfResponsibilityChatGPT\Request;

class ProcessingHandler implements RequestHandler
{
    private $nextHandler;

    public function setNext(RequestHandler $handler)
    {
        return $handler;
    }
    public function handle(Request $request)
    {
        echo "Processing request.\n";
    }
}


?>