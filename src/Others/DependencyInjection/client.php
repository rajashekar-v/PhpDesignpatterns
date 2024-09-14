<?php

namespace Rajashekar\Designpatterns\Others\DependencyInjection;


$container = new ServiceContainer();

$container->bind(DatabaseConnection::class,function($container){
    return new MySQLConnection();
});

$databaseService = $container->make(DatabaseConnection::class);

$container->bind(UserService::class, function($container) use ($databaseService) {
    return new UserService($databaseService);
});

$userService = $container->make(UserService::class);

echo $userService->getUser();


?>