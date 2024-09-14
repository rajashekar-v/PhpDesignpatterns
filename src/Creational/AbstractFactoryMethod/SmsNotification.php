<?php 
namespace Rajashekar\Designpatterns\Creational\AbstractFactoryMethod;

class SmsNotification implements Notification{

    public function send($message)
    {
        echo "Send Sms Notification {$message}\n";
    }
}


?>