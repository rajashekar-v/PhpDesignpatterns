<?php

namespace Design\Patterns\Behavioral\Observer;

use Design\Patterns\Behavioral\Observer\EventListner;

interface Event{

    public function attach(EventListner $eventlistener);

    public function deattach(EventListner $eventlistener);

    public function notify();
}

?>