<?php 
namespace Rajashekar\Designpatterns\Behavioral\Observer;

use Rajashekar\Designpatterns\Behavioral\Observer\SplSubject;

interface SplObserver{
    public function update(SplSubject $subject);
}




?>