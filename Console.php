<?php

class Console extends ElectronicItem {
    function __construct()
    {
        parent::__construct();
        $this->wired = true;
        $this->maxExtras = 4;
        $this->setType(ElectronicItem::ELECTRONIC_ITEM_CONSOLE);
    }
}