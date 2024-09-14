<?php 
namespace Rajashekar\Designpatterns\Creational\AbstractFactoryMethod;

class EmailNotificationFactory implements NotificationFactory
{
    public function createNotification()
    {
        return new EmailNotification();
    }

    public function createNotificationFormat()
    {
        return new EmailPlainFormat();
    }
}

?>