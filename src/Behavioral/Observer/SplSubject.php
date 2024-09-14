<?php 

namespace Rajashekar\Designpatterns\Behavioral\Observer;

use Rajashekar\Designpatterns\Behavioral\Observer\SplObserver;

interface SplSubject{

    public function attach(SplObserver $splObserver);

    public function deattach(SplObserver $splObserver);

    public function notify();
}




?>