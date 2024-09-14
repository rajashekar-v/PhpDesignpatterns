<?php

namespace Rajashekar\Designpatterns\Behavioral\Observer;

use Rajashekar\Designpatterns\Behavioral\Observer\SplObserver;
use Rajashekar\Designpatterns\Behavioral\Observer\SplSubject;
class IncrementCommentCount implements SplObserver
{
    public function update(SplSubject $subject)
    {
        echo __METHOD__ . " Updating comment count to + 1 for blog post id: " . $subject->post_id ."\n";
    }
}

?>