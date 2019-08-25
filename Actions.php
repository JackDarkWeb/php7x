<?php

namespace heritage;

include "Values.php";
class Actions extends Values
{

    public $purse;

    public function __construct($name, $price, $purse)
    {
        parent::__construct($name, $price);
        $this->purse = $purse;
    }

    public function getinfo()
    {
        $info = "<h3>Action $this->name cotée à la bourse de $this->purse </h3>";
        $info .= parent::getinfo();
        return $info;
    }
}