<?php
class ElectronicItems {
    private $items = array();

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function getSortedItems()
    {
        $sorted = array();
        array_map(function ($item) use (&$sorted) {
            $sorted[$item->getPrice()] = $item;
        }, $this->items);
        ksort($sorted, SORT_NUMERIC);
        return $sorted;
    }

    public function getItemsByType($type)
    {
        if (in_array($type, ElectronicItem::$types))
        {
            $callback = function($item) use ($type)
            {
                return $item->getType() == $type;
            };
            return array_filter($this->items, $callback);
        }
        return false;
    }

    public function getTotalPrice()
    {
        $total = 0;
        foreach ($this->items as $item)
        {
            $total += $item->getPrice();
        }
        return $total;
    }
}

?>