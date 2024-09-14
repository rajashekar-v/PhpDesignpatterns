<?php 
namespace Rajashekar\Designpatterns\Behavioral\ChainOfResponsibilityChatGPT;


$authHandler = new AuthenticationHandler();

$authHandler->setNext(new ValidationHandler())
->setNext(new LoggingHandler())
->setNext(new ProcessingHandler());

$request = new Request(true,true);

$authHandler->handle($request);
?>