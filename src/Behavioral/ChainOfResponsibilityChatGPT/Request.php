<?php 
namespace Rajashekar\Designpatterns\Behavioral\ChainOfResponsibilityChatGPT;

class Request
{
    public $isAuthenticated;
    public $isValid;

    public function __construct($isAuthenticated,$isValid)
    {
        $this->isAuthenticated = $isAuthenticated;
        $this->isValid = $isValid;
    }
}

?>