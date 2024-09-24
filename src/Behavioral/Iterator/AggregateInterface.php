<?php
namespace Rajashekar\Designpatterns\Behavioral\Iterator;

interface AggregateInterface{
    public function createIterator();
}