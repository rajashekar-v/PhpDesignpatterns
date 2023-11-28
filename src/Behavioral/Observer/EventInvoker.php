<?php

namespace Design\Patterns\Behavioral\Observer;

use Design\Patterns\Behavioral\Observer\Event;

use Design\Patterns\Behavioral\Observer\EventListner;

class EventInvoker implements Event{

    protected $eventlisteners = [];


    public function attach(EventListner $eventlistener)
    {
        $key = spl_object_hash($eventlistener);
        $this->eventlisteners[$key] = $eventlistener;
        return $this;
    }

    public function deattach(EventListner $eventlistener)
    {
        $key = spl_object_hash($eventlistener);
        unset($this->eventlisteners[$key]);
    }

    public function notify()
    {
        foreach ($this->eventlisteners as $eventlistener) {
            $eventlistener->update($this);
        } 
    }
}

?>