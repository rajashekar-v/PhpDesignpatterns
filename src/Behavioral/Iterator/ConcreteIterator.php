<?php
namespace Rajashekar\Designpatterns\Behavioral\Iterator;
use Rajashekar\Designpatterns\Behavioral\Iterator\IteratorInterface;
class ConcreteIterator implements IteratorInterface{
    private $items;
    private $index = 0;

    public function __construct($items)
    {
        $this->items = $items;
    }
    public function next()
    {
        return $this->items[$this->index++];
    }
    public function hasNext()
    {
        return isset($this->items[$this->index]);
    }
}