<?php
namespace Rajashekar\Designpatterns\Creational\AbstractFactoryMethod;

class SmsPlainFormat implements NotificationFormat
{
    public function format($message)
    {
        return $message;
    }
}


?>