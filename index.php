<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

function buy()
{
    $console = new Console();
    $console->setPrice(1200);
    $console->addExtra(new Controller($wired=true));
    $console->addExtra(new Controller($wired=true));
    $console->addExtra(new Controller());
    $console->addExtra(new Controller());

    $television_one = new Television();
    $television_one->setPrice(1500);
    $television_one->addExtra(new Controller());
    $television_one->addExtra(new Controller());

    $television_two = new Television();
    $television_two->setPrice(800);
    $television_two->addExtra(new Controller());

    $listItems = new ElectronicItems([$console, $television_one, $television_two]);

    return $listItems;
}

$transaction = buy();

// Question 1
var_dump($transaction->getSortedItems());
var_dump($transaction->getTotalPrice());

// Question 2
$console = $transaction->getItemsByType('console');
if (count($console))
    var_dump("The console price with its controllers is " . $console[0]->getPrice());

?>