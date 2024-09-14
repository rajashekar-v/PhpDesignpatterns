<?php
namespace Rajashekar\Designpatterns\Creational\AbstractFactoryMethod;

class EmailHTMLFormat implements NotificationFormat
{
    public function format($message)
    {
        return "<html><head><title>HTML Format</title></head><body>{$message}</body></html>";
    }
}


?>