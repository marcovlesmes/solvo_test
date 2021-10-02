<?php

class Controller extends ElectronicItem {
    function __construct($wired = false)
    {
        parent::__construct();
        $this->maxExtras = 0;
        $this->wired = $wired;
        $this->setType(ElectronicItem::ELECTRONIC_ITEM_CONTROLLER);
    }
}