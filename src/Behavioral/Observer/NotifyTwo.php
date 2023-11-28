<?php

namespace Design\Patterns\Behavioral\Observer;

use Design\Patterns\Behavioral\Observer\Event;
use Design\Patterns\Behavioral\Observer\EventListner;


class NotifyTwo implements EventListner{

    public $notifytwo;

    public function update(Event $event)
    {
        print_r($event);
    }
}

?>