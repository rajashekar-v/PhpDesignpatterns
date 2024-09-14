<?php 
namespace Rajashekar\Designpatterns\Creational\AbstractFactoryMethod;

class SmsNotificationFactory implements NotificationFactory
{
    public function createNotification()
    {
        return new SmsNotification();
    }

    public function createNotificationFormat()
    {
        return new SmsPlainFormat();
    }
}

?>