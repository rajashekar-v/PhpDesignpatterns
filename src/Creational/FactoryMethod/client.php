<?php 
namespace Rajashekar\Designpatterns\Creational\FactoryMethod;

$notification_type = "email";

if ($notification_type == "email") {
    $factory = new EmailNotificationFactory();
}else
{
    $factory = new SmsNotificationFactory();
}
    $notification = $factory->createNotification();
    $notification->send("This is email notification");
?>