<?php
namespace Rajashekar\Designpatterns\Behavioral\Iterator;

use Rajashekar\Designpatterns\Behavioral\Iterator\ConcreteAggregate;

$aggregate = new ConcreteAggregate();

$aggregate->add("Item 1");
$aggregate->add("Item 2");
$aggregate->add("Item 3");

$iterator = $aggregate->createIterator();
echo "<pre>";
print_r($iterator);
while ($iterator->hasNext()) {
    $item = $iterator->next();
    echo $item . PHP_EOL;
}