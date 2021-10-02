<?php
abstract class ElectronicItem {
    const ELECTRONIC_ITEM_CONSOLE = 'console';
    const ELECTRONIC_ITEM_MICROWAVE = 'microwave';
    const ELECTRONIC_ITEM_TELEVISION = 'television';
    const ELECTRONIC_ITEM_CONTROLLER = 'controller';
    protected $type;
    protected $price;
    protected $wired;
    protected $maxExtras;
    protected $extraItems;
    static $types = array(self::ELECTRONIC_ITEM_CONSOLE, 
    self::ELECTRONIC_ITEM_MICROWAVE, self::ELECTRONIC_ITEM_TELEVISION);

    function __construct()
    {
        $this->extraItems = array();
    }

    function getPrice()
    {
        return $this->price;
    }
    function getType()
    {
        return $this->type;
    }
    function getWired()
    {
        return $this->wired;
    }
    function getExtras()
    {
        return $this->extraItems;
    }
    function getMaxExtras()
    {
        return $this->maxExtras;
    }

    
    function setWired($wired)
    {
        $this->wired = $wired;
    }
    function setPrice($price)
    {
        $this->price = $price;
    }
    function setType($type)
    {
        $this->type = $type;
    }
    private function setExtra($item)
    {
        array_push($this->extraItems, $item);
    }
    function addExtra($item) {
        if (is_null($this->maxExtras) || count($this->extraItems) + 1 <= $this->maxExtras) {
            $this->setExtra($item);
            return count($this->extraItems);
        } else {
            return -1;
        }
    }
}
