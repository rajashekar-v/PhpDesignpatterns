<?php 

namespace Rajashekar\Designpatterns\Behavioral\ChainOfResponsibilityChatGPT;

interface RequestHandler{

    public function setNext(RequestHandler $requestHandler);
    public function handle(Request $request);
}


?>