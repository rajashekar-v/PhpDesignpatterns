<?php 
namespace Rajashekar\Designpatterns\Creational\FactoryMethod;

class SmsNotificationFactory extends NotificationFactory
{
    public function createNotification()
    {
        return new SmsNotification();
    }
}

?>