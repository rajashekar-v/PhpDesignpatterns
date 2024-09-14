<?php 
namespace Rajashekar\Designpatterns\Creational\FactoryMethod;

class EmailNotificationFactory extends NotificationFactory
{
    public function createNotification()
    {
        return new EmailNotification();
    }
}

?>