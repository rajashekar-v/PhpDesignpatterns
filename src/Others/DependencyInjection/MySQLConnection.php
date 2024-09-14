<?php 
namespace Rajashekar\Designpatterns\Others\DependencyInjection;

class MySQLConnection implements DatabaseConnection{
    public function connect()
    {
        return "Connecting to MySQL database";
    }
}


?>