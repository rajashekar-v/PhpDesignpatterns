<?php

namespace Design\Patterns\Behavioral\Observer;


interface EventListner{
    
    public function update(Event $event);

}


?>