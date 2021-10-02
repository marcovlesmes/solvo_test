<?php

class Television extends ElectronicItem {
    function __construct()
    {
        parent::__construct();
        $this->wired = true;
        $this->setType(ElectronicItem::ELECTRONIC_ITEM_TELEVISION);
    }
}