<?php 
namespace Rajashekar\Designpatterns\Creational\AbstractFactoryMethod;

class EmailNotification implements Notification
{
    public function send($message)
    {
        echo "Send Email Notification {$message}\n";
    }
}

?>