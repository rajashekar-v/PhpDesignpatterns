<?php 
namespace Rajashekar\Designpatterns\Others\DependencyInjection;

class UserService
{
    private $dbConnection;

    public function __construct(DatabaseConnection $dbConnection) {
        $this->dbConnection = $dbConnection;
    }

    public function getUser() {
        return $this->dbConnection->connect() . " and fetching user data";
    }
}
?>