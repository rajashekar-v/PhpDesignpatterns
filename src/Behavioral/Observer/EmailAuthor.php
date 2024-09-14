<?php

namespace Rajashekar\Designpatterns\Behavioral\Observer;

use Rajashekar\Designpatterns\Behavioral\Observer\SplObserver;
use Rajashekar\Designpatterns\Behavioral\Observer\SplSubject;
class EmailAuthor implements SplObserver
{
    public function update(SplSubject $subject)
    {
        echo __METHOD__ . " Emailing the author of post id: " . $subject->post_id . " that someone commented with : " . $subject->comment_text . "\n";
    }
}

?>