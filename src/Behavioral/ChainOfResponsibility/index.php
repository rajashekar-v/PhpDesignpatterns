<?php 
namespace Rajashekar\Designpatterns\Behavioral\ChainOfResponsibility;

use Rajashekar\Designpatterns\Behavioral\ChainOfResponsibility\Server;
use Rajashekar\Designpatterns\Behavioral\ChainOfResponsibility\ThrottlingMiddleware;
use Rajashekar\Designpatterns\Behavioral\ChainOfResponsibility\UserExistMiddleware;
use Rajashekar\Designpatterns\Behavioral\ChainOfResponsibility\RoleCheckMiddleware;


$server = new Server();

$server->register("sraja8648@gmail.com", "password@1234");
$server->register("admin@example.com", "password");

$middleware = new ThrottlingMiddleware(2);

$middleware->linkWith(new UserExistMiddleware($server))->linkWith(new RoleCheckMiddleware());


$server->setMiddleware($middleware);

do {
    echo "\nEnter your email:\n";
    $email = readline();
    echo "Enter your password:\n";
    $password = readline();
    $success = $server->logIn($email, $password);
} while (!$success);

//print_r($middleware);



?>