<?php 
namespace Rajashekar\Designpatterns\Creational\AbstractFactoryMethod;

$notification_type = "email";

if ($notification_type == "email") {
    $factory = new EmailNotificationFactory();
}else
{
    $factory = new SmsNotificationFactory();
}
$notification = $factory->createNotification();
$notification_format = $factory->createNotificationFormat();
$formattedMessage = $notification_format->format("This is email notification");
$notification->send($formattedMessage);
?>