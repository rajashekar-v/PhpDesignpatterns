<?php 
namespace Rajashekar\Designpatterns\Others\DependencyInjection;

class PostgreSQLConnection implements DatabaseConnection{

    public function __construct($dbname)
    {

    }
    public function connect()
    {
        return "Connecting to PostgreSQL database";
    }
}


?>