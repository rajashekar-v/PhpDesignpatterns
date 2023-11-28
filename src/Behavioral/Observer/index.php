<?php

namespace Design\Patterns\Behavioral\Observer;

require_once __DIR__ . '/../../../vendor/autoload.php';

use Design\Patterns\Behavioral\Observer\Event;
use Design\Patterns\Behavioral\Observer\EventListner;
use Design\Patterns\Behavioral\Observer\NotifyOne;
use Design\Patterns\Behavioral\Observer\NotifyTwo;

$eventInvoker = new EventInvoker();

$notifyone = new NotifyOne();
$notifytwo = new NotifyTwo();

$eventInvoker->attach($notifyone)->attach($notifytwo);

$eventInvoker->notify();





?>