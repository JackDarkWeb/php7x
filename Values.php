<?php

namespace heritage;

class Values
{
    protected $name;
    protected $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    protected function getinfo()
    {
        $info = "<h4>Le prix de $this->name est de $this->price </h4>";
        return $info;
    }
}