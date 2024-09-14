<?php
namespace Rajashekar\Designpatterns\Creational\AbstractFactoryMethod;

class EmailPlainFormat implements NotificationFormat
{
    public function format($message)
    {
        return $message;
    }
}


?>