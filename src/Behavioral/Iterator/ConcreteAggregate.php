<?php
namespace Rajashekar\Designpatterns\Behavioral\Iterator;
use Rajashekar\Designpatterns\Behavioral\Iterator\IteratorInterface;
use Rajashekar\Designpatterns\Behavioral\Iterator\ConcreteIterator;
class ConcreteAggregate implements AggregateInterface {

    private $items = [];

    public function add($items)
    {
        $this->items[] = $items;
    }

    public function createIterator()
    {
        return new ConcreteIterator($this->items);
    }
}