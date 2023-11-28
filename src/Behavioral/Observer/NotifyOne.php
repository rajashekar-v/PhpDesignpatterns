<?php

namespace Design\Patterns\Behavioral\Observer;

use Design\Patterns\Behavioral\Observer\Event;
use Design\Patterns\Behavioral\Observer\EventListner;


class NotifyOne implements EventListner{

    public $notifyone;
    
    public function update(Event $event)
    {
        print_r($event);
    }
}

?>