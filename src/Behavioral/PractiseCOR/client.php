<?php 

namespace Rajashekar\Designpatterns\Behavioral\PractiseCOR;

use Rajashekar\Designpatterns\Behavioral\PractiseCOR\Server;
use Rajashekar\Designpatterns\Behavioral\PractiseCOR\ThrottlingMiddleware;
use Rajashekar\Designpatterns\Behavioral\PractiseCOR\UserExistMiddleware;
use Rajashekar\Designpatterns\Behavioral\PractiseCOR\RoleCheckMiddleware;

$server = new Server();

$server->register("rajashekar@rpwebapps.com","Welcome@23");
$server->register("sraja8648@gmail.com","password");
$server->register("admin@example.com","password");

$middleware = new ThrottlingMiddleware(2);

$middleware->link_with(new UserExistMiddleware($server))->link_with(new RoleCheckMiddleware());

$server->set_middleware($middleware);

do{
    echo "Enter your mail id\n";
    $email = readline();
    echo "Enter your password\n";
    $password = readline();
    $success = $server->login($email,$password);
}while(!$success);

