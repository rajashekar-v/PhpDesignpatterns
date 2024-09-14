<?php 
namespace Rajashekar\Designpatterns\Creational\AbstractFactoryMethod;


interface NotificationFactory {
    public function createNotification();
    public function createNotificationFormat();

}

?>